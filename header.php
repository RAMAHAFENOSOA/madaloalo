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
<header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background-color:#178CA4">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/madaloalo-high-resolution-color-logo.png" alt=""></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="about.php">A propos</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="achat.php">Achat</a></li>
          <li><a href="reservation.php">Réservation</a></li>
          <li class="dropdown"><a href="#"><span>Provinces</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- debut du liste deroulante -->
              <?php foreach ($provinces as $province): ?>
                <li class="dropdown">
                  <a href="#">
                  <?php echo $province['nom_province']; ?><i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <form action="region_info.php" method="post">
                        <?php foreach ($regions as $region): ?>
                          <?php if ($region['nom_province'] == $province['nom_province']) { ?>
                            <li class="dropdown">
                              <a>
                                <button class="dropdown-item" type="submit" name="bouton" value="<?php echo $a=$region['nom_region'];?>" style="border:none;background-color:#fff"><?php echo $a=$region['nom_region'];?></button>
                              </a>
                            </li>
                          <?php } ?>
                        <?php endforeach; ?>
                      </form>
                    </ul>
                  </a>
                </li>
              <?php endforeach; ?><!-- fin du liste deroulante -->
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="signup.php">S'inscrire</a></li>
          <li><a href="signin.php">Se connecter</a></li>
          <li><a href="https://ispm-edu.com/"><img src="assets/img/logo_ispm.png" style="height:70px;width:70px;" alt="ispm_logo"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->