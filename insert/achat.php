<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
<a href="resto.php">resto / </a>
<a href="activite.php">activite /</a>
<a href="region.php">region /</a>
<a href="hotel.php">hotel</a>

    <h1 class="text-center">Modification achat</h1>
    <div class="container">
        <form action="insert_achat.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="user" class="form-label">Nom objet</label>
            <input type="text" name="nom_objet" class="form-control">
        </div>

        <div class="form-group">
            <label for="text" class="form-label">Categorie</label>
            <input type="text" name="nom_categorie"  class="form-control">
        </div>
        
        <div class="form-group">
            <label for="pass" class="form-label">Description de l'objet</label>
            <input type="text" name="description"  class="form-control">
        </div>    

        <div class="form-group">
            <label for="pass" class="form-label">lieu de localisation</label>
            <input type="text" name="lieu"  class="form-control">
        </div>  

        <div class="form-group">
            <label for="pass" class="form-label">prix objet</label>
            <input type="text" name="prix"  class="form-control">
        </div>   
        
        <div class="form-group">
            <label for="pass" class="form-label">Image objet</label>
            <input type="file" name="image_objet"  class="form-control">
        </div>   

        <div class="form-group">
            <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
        </div>
        </form> 
    </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
        <a href="../index.php" class="btn btn-warning mt-5"> Accueil </a>
    <div>
</body>
</html>