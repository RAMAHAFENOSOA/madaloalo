<?php
include 'database.php'; 
$sql = "SELECT COUNT(*) AS count FROM provinces";
$resultProvinces = $conn->query($sql);
if ($resultProvinces->num_rows > 0) {
    // Fetch the count
    $rowProvinces = $resultProvinces->fetch_assoc();
    $resultProvinces = $rowProvinces["count"];
} else {
}
$sql = "SELECT COUNT(*) AS count FROM hotel";
$resultHotels = $conn->query($sql);
if ($resultHotels->num_rows > 0) {
    // Fetch the count
    $rowHotels = $resultHotels->fetch_assoc();
    $resultHotels = $rowHotels["count"];
} else {
}
$sql = "SELECT COUNT(*) AS count FROM restaurant";
$resultRestaurant = $conn->query($sql);
if ($resultRestaurant->num_rows > 0) {
    // Fetch the count
    $rowRestaurants = $resultRestaurant->fetch_assoc();
    $resultRestaurant = $rowRestaurants["count"];
} else {
}
$sql = "SELECT COUNT(*) AS count FROM personne";
$resultPersonne = $conn->query($sql);
if ($resultPersonne->num_rows > 0) {
    // Fetch the count
    $rowPersonne = $resultPersonne->fetch_assoc();
    $resultPersonne = $rowPersonne["count"];
} else {
}
?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About de madaloalo</title>
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

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>A propos </h2>
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li>A propos</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/drone.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>A propos de MADALOALO.</h3>
            <p class="fst-italic"> Voici quelques exemples de ce que Madaloalo peut vous offrir:</p>
            <ul>
              <li><i class="bi bi-check2-circle"></i>Permet de vous guider dans votre quêtes</li>
              <li><i class="bi bi-check2-circle"></i> Vous donnes des informations sur les agences et autres informations que vous pourriez avoir besoin</li>
              <li><i class="bi bi-check2-circle"></i>Vous aides à choisir une place comme déstination. Cela pourra ne pas être fixe</li>
            </ul>
            <p>
            Pourquoi avez-vous besoin d'un guide pour voyager à Madagascar ?
Bien qu'il ne soit pas nécessaire d'avoir un guide national à Madagascar, il est fortement recommandé parce que : L'anglais est rarement parlé dans le pays, et couramment Français n'est pas souvent parlé dans les zones rurales. Nos guides nationaux peuvent vous aider à communiquer avec les habitants, ainsi qu’avec les guides locaux, qui sont souvent tenus de visiter les attractions touristiques nationales Les guides peuvent aider les visiteurs à naviguer dans certaines régions du pays où le GPS ne fonctionne pas Divers sites touristiques nécessitent des guides de conduite pour l'accès en raison de l'état des routes Les guides peuvent gérer l'hébergement à l'hôtel et les options de restauration en fonction de vos souhaits et de votre budget Les guides peuvent aider les visiteurs en cas d'urgence, ou peuvent les aider à naviguer dans l'infrastructure de santé limitée dans le pays au besoin.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php  echo($resultProvinces)?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Provinces</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php  echo($resultHotels)?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hotels</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php  echo($resultRestaurant)?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Restaurants</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php  echo($resultPersonne)?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Membres</p>
          </div>
        </div>
      </div>
    </section> <!-- End Facts Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Agence de voyages</h2>
          <p>Une liste de quelques agences de voyages qui collabore avec nous :</p>
        </div>

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <img src="assets/img/madacartour.png" class="testimonial-img" alt="">
              <h3>Madacartour</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Madacartour propose une variété de visites pré-planifiées autour de Madagascar. Adapter également les plans en fonction du temps et du budget du voyageur, et aussi soutenir les visiteurs qui planifient leurs propres excursions.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/aventour madagascar.png" class="testimonial-img" alt="">
              <h3>Aventour Madagascar</h3>
              
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Aventour Madagascar est une agence de voyages, réceptif et tour opérateur. Elle est basée à Antananarivo et propose des séjours et des circuits à travers toute la Grande Île.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/lemuria tour.jpg" class="testimonial-img" alt="">
              <h3>Lemuria tour</h3>
              
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Lemuria Tours est une Agence de voyage, Tour opérateur et Loueur de Voitures.
                Pour mieux vous servir, notre agence malgache a conçu toute une gamme de prestations allant du transport, l'hébergement à la restauration vous permettant de voyager 
                sereinement et profiter au maximum de votre séjour.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/Logo-ARICS.jpg" class="testimonial-img" alt="">
              <h3>ARICS Tours</h3>
             
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                ARICS TOURS Madagascar Travel Agency opère dans le volet de la billetterie pour toutes destinations internationale, nationales, régionales qui permet aux touristes de découvrir les sites touristiques émotionnels de notre Ile.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/Espace-Mada.webp" class="testimonial-img" alt="">
              <h3>Espace Mada</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Espace Mada Tour opérateur à Madagascar organise des circuits touristiques pour vos vacances à Madagascar avec location de 4*4, circuits avec chauffeur Guide. Découvertes du fleuve Tsiribihina, des Tsingy du Bemaraha, des parcs et réserve.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section */ -->

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