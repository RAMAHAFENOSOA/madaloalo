<?php
    include "connexion/connexionbd.php";

    // traitement de chaine de caractere
    $chaine=$_POST["description"];
    $quotes="'";
    $chgquotes="   ";

    $image_objet=$_FILES['image_objet']['name'];
    $nom_objet =$_POST["nom_objet"];    
    $description=str_replace($quotes,$chgquotes,$chaine);
    $nom_categorie=$_POST["nom_categorie"];
    $lieu=$_POST["lieu"];
    $prix=$_POST["prix"];

    if(isset($_FILES['image_objet'])){
        $img_nom = $_FILES['image_objet']['name'];
        $tmp_name = $_FILES['image_objet']['tmp_name'];
        $deplacer_image = move_uploaded_file($tmp_name,"../assets/img/img_achat/".$img_nom);
        if($deplacer_image){
            $query="INSERT INTO achat(nom_objet,description_objet,image_objet,categorie,prix_objet,lieu_d_achat) VALUE ('{$nom_objet}','{$description}','{$image_objet}','{$nom_categorie}','{$prix}','{$lieu}')";
            $add = mysqli_query($conn,$query);
        };
    };

    if ($add){
        echo "<script type='text/javascript'>alert('successfully!')</script>";
    };
    header('location:hotel.php');
?>  