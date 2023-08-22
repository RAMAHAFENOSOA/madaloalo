<?php
include "database.php";
$query = "SELECT * FROM achat";
$resultAchat = mysqli_query($conn,$query);
$achats = mysqli_fetch_all($resultAchat, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Achat</title>
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
<?php include "header.php" ?>

  <main id="main">

    <!-- ======= Our Achat Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Achat</h2>
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li>Achat</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Achat Section -->

    <!-- ======= Achat Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-sandale">Sandale</li>
              <li data-filter=".filter-vase">Vase</li>
              <li data-filter=".filter-art">Art</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <?php foreach ($achats as $achat): ?>
          <?php if ($achat['categorie'] == "sandale") { ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-sandale">
            <div class="portfolio-item">
              <img src="assets/img/kapakapa/<?php echo($achat['image_objet'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($achat['nom_objet'])?></h3>
                <div style="display: flex;justify-content: center;">
                  <a href="assets/img/kapakapa/<?php echo($achat['image_objet'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($achat['prix_objet'])?>"><i class="bx bx-fullscreen"></i></a>
                  <a href="mini-panier.php"><i class="bi bi-cart"></i> </a>
                </div> 
              </div>
              
            </div>
            <div style="display:flex;justify-content:space-between">
              <p><?php echo($achat['prix_objet'])?></p>
              <a href="mini-panier.php">  <i class="bi bi-cart"></i> </a>
            </div>
          </div>
          <?php } ?>
          <?php endforeach; ?>

          <?php foreach ($achats as $achat): ?>
          <?php if ($achat['categorie'] == "vase") { ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-vase" style>
            <div class="portfolio-item">
              <img src="assets/img/vases/<?php echo($achat['image_objet'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($achat['nom_objet'])?></h3>
                <div style="display: flex;justify-content: center;">
                  <a href="assets/img/vases/<?php echo($achat['image_objet'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($achat['prix_objet'])?>"><i class="bx bx-fullscreen"></i></a>
                  <a href="mini-panier.php"><i class="bx bx-plus"></i></a>
                </div> 
              </div>
            </div>
            <div style="display:flex;justify-content:space-between">
              <p><?php echo($achat['prix_objet'])?></p>
              <a href="mini-panier.php"<i class="bi bi-cart"></i> </a>
            </div>
          </div>
          <?php } ?>
          <?php endforeach; ?>

          <?php foreach ($achats as $achat): ?>
          <?php if ($achat['categorie'] == "art") { ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-art">
            <div class="portfolio-item">
              <img src="assets/img/hosidoko/<?php echo($achat['image_objet'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($achat['nom_objet'])?></h3>
                <div style="display: flex;justify-content: center;">
                  <a href="assets/img/hosidoko/<?php echo($achat['image_objet'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($achat['prix_objet'])?>"><i class="bx bx-fullscreen"></i></a>
                </div> 
              </div>
            </div>
            <div style="display:flex;justify-content:space-between">
              <p><?php echo($achat['prix_objet'])?></p>
              <form action="mini-panier.php" method="post">
                      <input type="number" name="nbr_achete" id="">
                  </form>
                  <a href="mini-panier.php"><i class="bi bi-cart"></i> </a>
              
            </div>

          </div>
          <?php } ?>
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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

</html>