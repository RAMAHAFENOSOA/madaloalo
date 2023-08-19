<?php
include "../database.php";
$image=$_FILES['img']['name'];
$Nom =$_POST["nom"];    
$description=$_POST["descr"];
$quotes="'";
$chgquotes="   ";
$region=$_POST["region"];
$lieu=$_POST["adresslieu"];
$prix=$_POST["prix"];
$description=str_replace($quotes,$chgquotes,$description);
    if(isset($_FILES['img'])){
        $img_nom = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $deplacer_image = move_uploaded_file($tmp_name,"../assets/img/img_hotel/".$img_nom);
        if($deplacer_image){
            $query="INSERT INTO hotel(nom_hotel,adress_lieu,description_hotel,region,image_hotel,prix_s_ejour) VALUE ('{$Nom}','{$lieu}','{$description}','{$region}','{$image}','{$prix}')";
            $add = mysqli_query($conn,$query);
        };
    }
    if ($add){
        echo "<script type='text/javascript'>alert('successfully!')</script>";
    };
    header('location:hotel.php');
?>  