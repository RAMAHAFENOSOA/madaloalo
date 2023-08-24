!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Madaloalo - nom hotel</title>
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
  <style>
    /* Overlay */
    .overlay {
      background-color: rgba(0,0,0,.92);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: none;
      justify-content: center;
      align-items: center;
    }

    /* Modal container */
    .modal-container {
      background-color: white;
      padding: 20px;
      border-radius: 2px;
      box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
      animation: fadeIn 0.8s ease-out;
      width: 500px;
      height: 535px;
    }

    .scrollable {
     overflow-y: scroll;
     overflow-x: hidden;
     height: 400px;
    }

    /* Animation keyframes */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.8);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    #booking {
        font-family: 'Montserrat', sans-serif;
        background-image: url('https://i.imgur.com/ZaRYfYW.jpg');
        background-size: cover;
        background-position: center;
    }

    #booking::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        background: rgba(47, 103, 177, 0.6);
    }

    .booking-form {
        background-color: #fff;
        padding: 25px 10px 0px;
        /* -webkit-box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3); */
        /* box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3); */
        border-radius: 4px;
    }

    .booking-form .form-group {
        position: relative;
        margin-bottom: 30px;
    }

    .booking-form .form-control {
        background-color: #ebecee;
        border-radius: 4px;
        border: none;
        height: 40px;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #3e485c;
        font-size: 14px;
    }

    .booking-form .form-control::-webkit-input-placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form .form-control:-ms-input-placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form .form-control::placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form input[type="date"].form-control:invalid {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .booking-form select.form-control+.select-arrow {
        position: absolute;
        right: 0px;
        bottom: 4px;
        width: 32px;
        line-height: 32px;
        height: 32px;
        text-align: center;
        pointer-events: none;
        color: rgba(62, 72, 92, 0.3);
        font-size: 14px;
    }

    .booking-form select.form-control+.select-arrow:after {
        content: '\279C';
        display: block;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .booking-form .form-label {
        display: inline-block;
        color: #3e485c;
        font-weight: 700;
        margin-bottom: 6px;
        margin-left: 7px;
    }

    .booking-form .submit-btn {
        display: inline-block;
        color: #fff;
        background-color: #1e62d8;
        font-weight: 700;
        padding: 14px 30px;
        border-radius: 4px;
        border: none;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .booking-form .submit-btn:hover,
    .booking-form .submit-btn:focus {
        opacity: 0.9;
    }

    .booking-cta {
        margin-top: 80px;
        margin-bottom: 30px;
    }

    .booking-cta h1 {
        font-size: 52px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
    }

    .booking-cta p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
    }

    .reservation-container {
        display: flex;
        height : 10px;
        justify-content: space-between;
    }
</style>
</head>
<body> 
<?php 
include ('traitementreservation.php'); 
include "header.php";

$query = "SELECT * FROM hotel WHERE nom_hotel LIKE '%$valeurNomReservation%'";
$resultHotel = mysqli_query($conn, $query);
$hotels = mysqli_fetch_all($resultHotel, MYSQLI_ASSOC);

if ($resultHotel->num_rows > 0) {
    // Value exists in the table column, continue with your logic
    // ...
} else {
  $query = "SELECT * FROM activete WHERE nom_act LIKE '%$valeurNomReservation%'";
  $resultHotel = mysqli_query($conn, $query);
  $hotels = mysqli_fetch_all($resultHotel, MYSQLI_ASSOC);
}
?>

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo isset($hotels[0]['nom_hotel']) ? $hotels[0]['nom_hotel'] : $hotels[0]['nom_act'];?></h2>
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="reservation.php">Réservation</a></li>
            <li><?php echo isset($hotels[0]['nom_hotel']) ? $hotels[0]['nom_hotel'] : $hotels[0]['nom_act'];?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper" style="z-index:-5!important;">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/<?php echo isset($hotels[0]['image_hotel']) ? 'img_hotel' : 'img_resto';?>/<?php echo isset($hotels[0]['image_hotel']) ? $hotels[0]['image_hotel'] : $hotels[0]['image_resto'];?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Plus d'information</h3>
              <ul>
                <li><strong>Région</strong>: <?php echo isset($hotels[0]['region']) ? $hotels[0]['region'] : $hotels[0]['region'];?></li>
                <li><strong>Adresse</strong>: <?php echo isset($hotels[0]['adress_lieu']) ? $hotels[0]['adress_lieu'] : $hotels[0]['lieu_resto'];?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Déscription</h2>
              <p>
              <?php echo isset($hotels[0]['description_hotel']) ? $hotels[0]['description_hotel'] : $hotels[0]['description_resto'];?>
              </p>
              <button type="button" class="btn btn-info" onclick="openModal()">Réserver</button>

            <!-- Overlay -->
            <div id="overlay" class="overlay">
            <!-- Modal -->
            <div class="modal-container">
                <!-- Modal content -->
                <div class="reservation-container">
                <span class="form-label">Information personelle</span>
                    <i class="bi bi-x-circle" style="font-size:20px;" onclick="closeModal()"></i>
                </div>
                <div class="booking-form">
                        <form>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter votre nom ">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter votre prénom ">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Enter email ">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Debut</span>
                                            <input class="form-control" type="date" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Fin</span>
                                            <input class="form-control" type="date" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Chambres</span>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Adultes</span>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Enfants</span>
                                            <select class="form-control">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <button type="button" class="btn btn-success">Reserver</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                           
                            <div class="form-btn">
                        </form>
                    </div>                
            </div>
            </div>

            <script>
            function openModal() {
                const overlay = document.getElementById('overlay');
                overlay.style.display = 'flex';
                document.body.style.overflow = 'hidden'; // Disable scrolling
            }

            function closeModal() {
                const overlay = document.getElementById('overlay');
                overlay.style.display = 'none';
                document.body.style.overflow = 'auto'; // Re-enable scrolling
            }
            </script>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

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