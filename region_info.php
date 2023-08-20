<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Régions - Explorez les régions de Madagascar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/madaloalo-high-resolution-color-logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php
include ('traitementregion.php');
include('header.php');
// requete qui reprend la variable bouton ($valeurNomRegion) comme condition
 $query = "SELECT * FROM region WHERE nom_region LIKE '%$valeurNomRegion%'";
// excecute la requete et range les donnees en tableau associative
// $result : Cette variable stocke le résultat de l'exécution de la requête.
// mysqli_query() : Cette fonction est utilisée pour exécuter une requête MySQL. Elle prend deux paramètres : la connexion à la base de données ($conn) et la chaîne de requête ($query).
// $conn : Cette variable représente l'objet de connexion à la base de données. Assurez-vous de l'avoir initialisé et établi avec succès avant d'exécuter la requête. Vérifiez que vous avez une connexion à la base de données valide et active assignée à la variable $conn.
// $query : Cette variable contient la chaîne de requête SQL. Elle doit être construite au préalable dans votre code et contenir l'instruction SELECT avec la condition appropriée. 
$result = mysqli_query($conn,$query);
// Après l'exécution de la requête, mysqli_fetch_assoc() est utilisée pour extraire la première ligne du résultat et la stocker dans la variable $region sous la forme d'un tableau associatif. Cela vous permet d'accéder aux valeurs de la première ligne de résultat en utilisant les noms de colonne comme clés du tableau.
// mysqli_fetch_assoc() : Cette fonction récupère une ligne de résultat sous la forme d'un tableau associatif. Elle prend comme paramètre le résultat de la requête ($result).
$region = mysqli_fetch_assoc($result);
?>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo($valeurNomRegion) ?></h2>
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li>Régions</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <!-- ======= About Section ======= -->
    
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/img_region/<?php echo($region['image_region']) ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3 style="text-align: start;"><?php echo($region['descriptions']) ?></h3>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <?php echo($region['description1']) ?></li>
              <li><i class="bi bi-check2-circle"></i> <?php echo($region['description2']) ?></li>
              <li><i class="bi bi-check2-circle"></i> <?php echo($region['description3']) ?></li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->




  </main><!-- End #main -->
  <?php include "footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</php>