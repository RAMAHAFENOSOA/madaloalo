<?php

include "database.php";
$query = "SELECT * FROM hotel";
$resultHotels = mysqli_query($conn,$query);
$hotels = mysqli_fetch_all($resultHotels, MYSQLI_ASSOC);
$query = "SELECT * FROM restaurant";
$resultRestaurant = mysqli_query($conn,$query);
$restaurants = mysqli_fetch_all($resultRestaurant, MYSQLI_ASSOC);
$query = "SELECT * FROM activite";
$resultActivites = mysqli_query($conn,$query);
$activites = mysqli_fetch_all($resultActivites, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Madaloalo - Reservation</title>
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

    <!-- ======= Réservation Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Réservation</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Réservation</li>
          </ol>
        </div>

      </div>
    </section><!-- End Reservation Section -->

    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-hotel">Hotels</li>
              <li data-filter=".filter-activity">Activités</li>
              <li data-filter=".filter-restaurant">Restaurant</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          
        <?php foreach ($hotels as $hotel): ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-hotel">
            <div class="portfolio-item">
              <img src="assets/img/img_hotel/<?php echo($hotel['image_hotel'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($hotel['nom_hotel'])?></h3>
                <div style="display: flex;justify-content: center;">
                  <a href="assets/img/img_hotel/<?php echo($hotel['image_hotel'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($hotel['nom_hotel'])?>"><i class="bx bx-fullscreen"></i></i></a>
                  <form action="reservation-details.php" method="post">
                    <div>
                      <button href="reservation-details.php" title="Plus de details" type="submit" name="reservation" value="<?php echo $test=$hotel['nom_hotel'];?>" ><i class="bx bx-plus"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php foreach ($restaurants as $restaurant): ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-restaurant">
            <div class="portfolio-item">
            <img src="assets/img/img_resto/<?php echo($restaurant['image_resto'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><?php echo($restaurant['nom_resto'])?></h3>
                <div style="display: flex;justify-content: center;">
                  <a href="assets/img/img_resto/<?php echo($restaurant['image_resto'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($restaurant['nom_resto'])?>"><i class="bx bx-fullscreen"></i></i></a>
                  <form action="reservation-details.php" method="post">
                    <div>
                      <button href="reservation-details.php" title="Plus de details" type="submit" name="reservation" value="<?php echo $test=$restaurant['nom_resto'];?>" ><i class="bx bx-plus"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php foreach ($activites as $activite): ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-activity">
            <div class="portfolio-item">
              <img src="assets/img/img_activite/<?php echo($activite['image_act'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($activite['nom_act'])?></h3>
                <div style="display: flex;justify-content: center;">
                  <a href="assets/img/img_activite/<?php echo($activite['image_act'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($activite['nom_act'])?>"><i class="bx bx-fullscreen"></i></i></a>
                  <form action="reservation-details.php" method="post">
                    <div>
                      <button href="reservation-details.php" title="Plus de details" type="submit" name="reservation" value="<?php echo $test=$activite['nom_act'];?>" ><i class="bx bx-plus"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
      
  </section><!-- End Reservation section -->

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