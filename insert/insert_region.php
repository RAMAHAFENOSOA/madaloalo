<?php
    include "../database.php";
    // traitement de chaine de caractere
    $chaine=$_POST["description"];
    $description1=$_POST["description1"];
    $description2=$_POST["description2"];
    $description3=$_POST["description3"];
    $quotes="'";
    $chgquotes="   ";

    $image_region=$_FILES['image_region']['name'];
    $nom_region =$_POST["nom_region"];    
    $nom_province =$_POST["nom_province"];    
    $code_postal =$_POST["code_postal"];    
    $description=str_replace($quotes,$chgquotes,$description1);
    $description1=str_replace($quotes,$chgquotes,$description1);
    $description2=str_replace($quotes,$chgquotes,$description2);
    $description3=str_replace($quotes,$chgquotes,$description3);
    // Test si le region existe
        if(isset($_FILES['image_region'])){
            $img_nom = $_FILES['image_region']['name'];
            $tmp_name = $_FILES['image_region']['tmp_name'];
            $deplacer_image = move_uploaded_file($tmp_name,"../assets/img/img_region/".$img_nom);

            if($deplacer_image){
                $query="INSERT INTO region (nom_province,nom_region,descriptions,description1,description2,description3,code_postal,image_region) VALUE ('{$nom_province}','{$nom_region}','{$description}','{$description1}','{$description2}','{$description3}','{$code_postal}','{$image_region}')";
                $add = mysqli_query($conn,$query);
            }
        }
        if ($add){
            echo "<script type='text/javascript'>alert('successfully!')</script>";
        };
        header('location:hotel.php');
?>  