<?php
include "database.php";
$query = "SELECT * FROM provinces";
$result = mysqli_query($conn,$query);
$provinces = mysqli_fetch_all($result, MYSQLI_ASSOC);
$query2 = "SELECT * FROM region";
$result2 = mysqli_query($conn, $query2);
$regions = mysqli_fetch_all($result2, MYSQLI_ASSOC);
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/logo.png" alt=""></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="" href="index.php">Accueil</a></li>
          <li><a class="active" href="about.php">A propos</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Achat</a></li>
          <li><a href="team.php">Membres</a></li>
          <li class="dropdown"><a href="#"><span>Provinces</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php foreach ($provinces as $province): ?>
                <li class="dropdown"><a href="#">
                  <?php echo $province['nom_province']; ?><i class="bi bi-chevron-right"></i></a>
                <ul>
                <?php foreach ($regions as $region): ?>
                  <?php if ($region['nom_province'] == $province['nom_province']) { ?>
                    <li><a href="pageregion.php" onclick=""><?php echo $a=$region['nom_region']; ?> </a></li>
                  <?php } ?>
                <?php endforeach; ?>
                </ul>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="forms/signup.php">S'inscrire</a></li>
          <li><a href="forms/signin.php">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->