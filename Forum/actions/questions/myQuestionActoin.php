<?php 
session_start();
require('actions/database.php');

$getAllMyQuestions = $conn->prepare('SELECT id, titre, description FROM questions WHERE id = ?');
$getAllMyQuestions->execute(array($_session['id']));