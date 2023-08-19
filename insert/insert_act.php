<?php
    include "connexion/connexionbd.php";

    // traitement de chaine de caractere
    $chaine=$_POST["description"];
    $quotes="'";
    $chgquotes="   ";

    $chaine1=$_POST["nom_activite"];
    $quotes="'";
    $chgquotes="   ";
    

    $regionauto=array("Analamanga","Bongolava","Vakinakaratra","Diana","Sava","Haute Mahatsiatra","Ihorombre","Vatovavy Fitovinany","Melaky","Sofia","Boeny","Betsiboka","Atsinanana","Alaotra Mangoro","Analanjirofo","Anosy","Androy","Menabe","Atsimo Andrefana","Itasy","Amoron'i Mania","Atsimo Antsinanana");
    $image_activite=$_FILES['image_activite']['name'];
    $nom_region =$_POST["nom_region"];    
    $nom_activite =str_replace($quotes,$chgquotes,$chaine1);    
    $lieu =$_POST["lieu"];    
    $description=str_replace($quotes,$chgquotes,$chaine);
    $prix=$_POST["prix"];
    // Test si le region existe
    if(in_array( $nom_region,$regionauto)){
        if(isset($_FILES['image_activite'])){
            $img_nom = $_FILES['image_activite']['name'];
            $tmp_name = $_FILES['image_activite']['tmp_name'];
            $deplacer_image = move_uploaded_file($tmp_name,"../assets/img/img_activite/".$img_nom);

            if($deplacer_image){
                $query="INSERT INTO activite(nom_act,image_act,description_act,region,lieu_localisation,prix_act) VALUE ('{$nom_activite}','{$image_activite}','{$description}','{$nom_region}','{$lieu}','{$prix}')";
                $add = mysqli_query($conn,$query);
                
            }
        }
        if ($add){
            echo "<script type='text/javascript'>alert('successfully!')</script>";
        };
        header('location:hotel.php');
    }else{
        echo "<script type='text/javascript'>alert('Ce region n\'existe pas ici!')</script>";
    }
    header('location:activite.php');
?>  