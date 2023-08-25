
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Voyagez à Madagascar</title>
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
  <link href="assets/css/slidestyle.css" rel="stylesheet">

</head>

<body>
<?php 
  
include "header.php" 
?>

 

  <main id="main">
    <!-- SLIDER START -->
    <div class="slider">
        <div class="slides" >
          <!-- radio buttons start -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

          <!-- radio buttons end -->

          <!-- slide img start -->
              <div class="slide first">
                  <img src="./images/palmier-plage-entouree-verdure-mer-sous-lumiere-du-soleil-praslin-aux-seychelles.jpg" alt="" >
                  
                 
                      <h2 class="animate__animated animate__fadeInDown" style=" color:#fff; text-align:center; position:relative; bottom:45%">Laissez-vous envoûter par la diversité de Madagascar. </h2>
                      <p class="animate__animated animate__fadeInUp" style=" color:#fff; text-align:center; position:relative; bottom:45%">Depuis ses magnifiques plages jusqu'à ses sommets montagneux en passant par ses villages pittoresques chargés d'authenticité.</p>
                      
                
                </div>
            
                <div class="slide ">
                  
                  <img src="./images/coucher-soleil-beaute-tranquille-foret-tropicale-humide-generee-par-ia.jpg" alt="" >
                  
                  <h2 class="animate__animated animate__fadeInDown" style=" color:#fff; text-align:center; position:relative; bottom:45%">Bienvenue sur notre site dédié au voyage au cœur de Madagascar </h2>
                  <p class="animate__animated animate__fadeInUp" style=" color:#fff; text-align:center; position:relative; bottom:45%">
                   Découvrez les trésors cachés et les merveilles inexplorées de Madagascar grâce à nos offres exclusives.
                  </p>
                </div>
                <div class="slide">
                  <img src="./images/plan-horizontal-vue-plage-mer-serviettes-disposees-sous-arbre-aruba.jpg" alt="" >
                  <h2 class="animate__animated animate__fadeInDown" style=" color:#fff; text-align:center; position:relative; bottom:45%">Prêt à plonger dans l'aventure ?</h2>
                  <p class="animate__animated animate__fadeInUp" style=" color:#fff; text-align:center; position:relative; bottom:45%">Explorez Madagascar à travers nos circuits sur mesure, conçus pour vous faire vivre une expérience unique mêlant culture, histoire et paysages à couper le souffle.</p>
                </div>
              
                <div class="slide">
                  <img src="./images/scene-tranquille-chaine-montagnes-refletee-dans-etang-genere-par-ia.jpg" alt=""  >
               
                          <h2 class="animate__animated animate__fadeInDown" style=" color:#fff; text-align:center; position:relative; bottom:45%">Reconnectez-vous avec la nature ,</h2>
                          <p class="animate__animated animate__fadeInUp" style=" color:#fff; text-align:center; position:relative; bottom:45%">en explorant les parcs nationaux préservés et les réserves naturelles de Madagascar où la faune et la flore vous réservent un spectacle éblouissant.</p>
                       
                </div>
            
                

          <!-- slide img end -->
            <!-- autaumatic navigation start -->
            <div class="navigation-auto">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>
              <div class="auto-btn4"></div>

            </div>
            <!-- autaumatic navigation end -->

          <!-- manual navigation start -->
          <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2"  class="manual-btn"></label>
            <label for="radio3"  class="manual-btn"></label>
            <label for="radio4"  class="manual-btn"></label>

          </div>
          <!-- manual navigation end -->
          


        </div>
        <script type="text/javascript">
          var counter = 1;
          setInterval(function() {
            document.getElementById('radio' + counter ).checked  = true; 
            counter++;
            if(counter > 4){
              counter = 1;
            }
          }, 7953); 

        </script>
      </div>
      <!-- <div class="curve"></div> -->
<!-- SLIDER END -->


    <!-- ======= Services Section ======= -->
    <div class="text">
        <h2 style="text-align: center;">Nous offrons divers services</h2>
        </div>
    <section class="services">
      <div class="container">
       
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bi bi-bicycle"></i></div>
              <h4 class="title"><a href="reservation.php">Activités</a></h4>
              <p class="description">Rejoignez-nous pour une aventure épique <br>Explorez les magnifiques paysages côtiers entouré par la beauté naturelle</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bi bi-house"></i></div>
              <h4 class="title"><a href="reservation.php">Hôtels</a></h4>
              <p class="description"> Découvrez un séjour exceptionel dont nous vous invitons à vous ressourcer dans des diverses Hôtels à Madagascar</p>
            </div>
          </div>

       
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
              <div class="icon"><i class="bi bi-cart3"></i></div>
              <h4 class="title"><a href="achat.php">Achat</a></h4> 
              <p class="description">Bénéficier d'une facilité et commodité de l'achat en ligne</p>
            </div>
    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bi bi-file-check"></i></div>
              <h4 class="title"><a href="reservation.php">Reservation</a></h4>
              <p class="description">Simplifiez votre voyage en réservant chez nous</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
          <video width="100%" controls autoplay muted loop>
            <source src="assets/video/Madagascar - Parc National Tsingy de Bemaraha  [4K].mp4" type="video/mp4">
          </video>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bi bi-binoculars-fill"></i></div>
              <h4 class="title"><a href="">Explorer Madagascar</a></h4>
              <p class="description">Decouvrer les paysages qui coupent le souffle quand on prend le temps de regarder</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-camera-fill"></i></div>
              <h4 class="title"><a href="">Créer des souvenirs inoubliable </a></h4>
              <p class="description">Que vous soyez à Madagascar ou à l'étranger, que vous soyez malagasy ou non , vous êtes le ou la bienvenu </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
         
    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Adresse</h3>
                  <p>Antananarive, Analamanga, Madagascar</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                 <a href="mailto:multisevenup@example.com"> <i class="bx bx-envelope"> </i></a>
                  <h3>Email </h3>
                  <p>multisevenup@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Contactez-nous</h3>
                  <p>+261 32 59 587 18<br>+261 34 64 459 16</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">en cours</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyer. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
      </div>
    </section><!-- End Features Section -->

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