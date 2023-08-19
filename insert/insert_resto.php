<?php
include "../database.php";
$chaine=$_POST["description"];
$quotes="'";
$chgquotes="   ";
$image_restaurant=$_FILES['image_restaurant']['name'];
$nom_region =$_POST["nom_region"];    
$nom_restaurant =$_POST["nom_restaurant"];    
$lieu_restaurant =$_POST["lieu_restaurant"];    
$nom_resto=str_replace($quotes,$chgquotes,$nom_restaurant);
$description=str_replace($quotes,$chgquotes,$chaine);// Test si le region existe
    if(isset($_FILES['image_restaurant'])){        
        $img_nom = $_FILES['image_restaurant']['name'];
        $tmp_name = $_FILES['image_restaurant']['tmp_name'];
        $deplacer_image = move_uploaded_file($tmp_name,"../assets/img/img_resto/".$img_nom);        
        if($deplacer_image){
            $query="INSERT INTO restaurant(nom_resto,description_resto,image_resto,region,lieu_resto) VALUE ('{$nom_resto}','{$description}','{$image_restaurant}','{$nom_region}','{$lieu_restaurant }')";
            $add = mysqli_query($conn,$query);
        };
    }
    if ($add){
        echo "<script type='text/javascript'>alert('successfully!')</script>";
    };
    header('location:resto.php');
?>  