<?php
session_start();
require('actions/database.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/Y');


        $insertQuestionOnwebsite = $conn->prepare('INSERT INTO questions(titre, description, contenu, date_publication) VALUES(?, ?, ?, ?)');

        $insertQuestionOnwebsite->execute(array($question_title, $question_description, $question_content, $question_date));

        $successMsg = "Votre question a bien été publiée sur le site";
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    } 
}