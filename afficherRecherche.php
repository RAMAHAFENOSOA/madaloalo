
<?php 
include 'database.php'; 
$allachats = $conn->query('SELECT * FROM achat ORDER BY id_achat DESC');
if(isset($_GET['s'])){
  $recherche = htmlspecialchars($_GET['s']);
  $allachats = $conn->query('SELECT * FROM achat WHERE nom_objet LIKE "%'.$recherche.'%" ORDER BY id_achat DESC');
}

$allactivite = $conn->query('SELECT * FROM activite ORDER BY id_activite DESC');
if(isset($_GET['s'])){
    $rech = htmlspecialchars($_GET['s']);
    $allactivite = $conn->query('SELECT * FROM activite WHERE nom_act LIKE "%'.$rech.'%" ORDER BY id_activite');
}

$allhotel = $conn->query('SELECT * FROM hotel ORDER BY id_hotel DESC');
if(isset($_GET['s'])){
    $reche = htmlspecialchars($_GET['s']);
    $allhotel = $conn->query('SELECT * FROM hotel WHERE nom_hotel LIKE "%'.$reche.'%" ORDER BY id_hotel');
}

$allprovince = $conn->query('SELECT * FROM provinces ORDER BY id_province DESC');
if(isset($_GET['s'])){
    $rec = htmlspecialchars($_GET['s']);
    $allprovince = $conn->query('SELECT * FROM provinces WHERE nom_province LIKE "%'.$rec.'%" ORDER BY id_province');
}

$allregion = $conn->query('SELECT * FROM region ORDER BY id DESC');
if(isset($_GET['s'])){
    $rechers = htmlspecialchars($_GET['s']);
    $allregion = $conn->query('SELECT * FROM region WHERE nom_region LIKE "%'.$rechers.'%" ORDER BY id');
}

$allrestaurant = $conn->query('SELECT * FROM restaurant ORDER BY id_resto DESC');
if(isset($_GET['s'])){
    $re = htmlspecialchars($_GET['s']);
    $allrestaurant = $conn->query('SELECT * FROM restaurant WHERE nom_resto LIKE "%'.$re.'%" ORDER BY id_resto');
}

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
 
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

    <title>votre recherche</title>
</head>
<body>
<?php 
  
  include "header.php" 
  ?>
<section class="afficher_utilisateur" style="margin:10%"> 

<?php 
    ?> <h6 style="color:#41cf2e;font-size:17px;"<i class="bi bi-caret-right"></i>Achats</h6> <?php
  if(mysqli_num_rows($allachats) > 0){
      while ($achat = mysqli_fetch_assoc($allachats)) {
        ?>
          <p><a href="achat.php" style="color:#68A4C4; text-decoration:none;"><?= $achat['nom_objet']; ?></a></p>
        <?php
      }
  }else{
    ?>
      <p>Aucun resultat</p>
    <?php
  }
    ?> <h6 style="color:#41cf2e;font-size:17px;"<i class="bi bi-caret-right"></i>Activités</h6> <?php
  if(mysqli_num_rows($allactivite) > 0){
    while ($activite = mysqli_fetch_assoc($allactivite)) {
      ?>
        <p><a href="reservation.php" style="color:#68A4C4; text-decoration:none;"><?= $activite['nom_act']; ?></a></p>
      <?php
    }
}else{
  ?>
    <p>Aucun resultat</p>
  <?php
}
?> <h6 style="color:#41cf2e;font-size:17px;"<i class="bi bi-caret-right"></i>Hôtels</h6> <?php
if(mysqli_num_rows($allhotel) > 0){
    while ($hotel = mysqli_fetch_assoc($allhotel)) {
      ?>
        <p><a href="reservation.php" style="color:#68A4C4; text-decoration:none;"><?= $hotel['nom_hotel']; ?></a></p>
      <?php
    }
}else{
  ?>
    <p>Aucun resultat</p>
  <?php
}

?> <h6 style="color:#41cf2e;font-size:17px;"<i class="bi bi-caret-right"></i>Provinces</h6> <?php
if(mysqli_num_rows($allhotel) > 0){
    while ($province = mysqli_fetch_assoc($allprovince)) {
      ?>
        <p><a href="region_info.php" style="color:#68A4C4; text-decoration:none;"><?= $province['nom_province']; ?></a></p>
      <?php
    }
}else{
  ?>
    <p>Aucun resultat</p>
  <?php
}

?> <h6 style="color:#41cf2e;font-size:17px;"<i class="bi bi-caret-right"></i>Région</h6> <?php
if(mysqli_num_rows($allregion) > 0){
    while ($region = mysqli_fetch_assoc($allregion)) {
      ?>
        <p><a href="region_info.php" style="color:#68A4C4; text-decoration:none;"><?= $region['nom_region']; ?></a></p>
      <?php
    }
}else{
  ?>
    <p>Aucun resultat</p>
  <?php
}

?> <h6 style="color:#41cf2e;font-size:17px;"<i class="bi bi-caret-right"></i>Réstautant</h6> <?php
if(mysqli_num_rows($allrestaurant) > 0){
    while ($resto = mysqli_fetch_assoc($allrestaurant)) {
      ?>
        <p><a href="reservation.php" style="color:#68A4C4; text-decoration:none;"><?= $resto['nom_resto']; ?></a></p>
      <?php
    }
}else{
  ?>
    <p>Aucun resultat</p>
  <?php
}

?>
</body>
</html>