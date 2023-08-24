<?php
    session_start();
    include "database.php";
    if(isset($_POST['envoyer']) AND !empty($_POST['coms']))
    {
        $user=$_SESSION['nom'];
        $coms=htmlspecialchars(wordwrap($_POST['coms'],15,"\n"));
        $date=date('d-m-y h:i:s');
        $query= "INSERT INTO commentaire(nom_personne,date_coms,coms) VALUES('{$user}','{$date}','{$coms}')";
        $add_user = mysqli_query($conn,$query);
    }
    $query = "SELECT * FROM commentaire ORDER BY id_coms DESC";
    $resultat = mysqli_query($conn, $query);
    $comments = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>
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
  <link rel="stylesheet" href="CSS/forum.css">

</head>

<body style="display:flex;">
<div class="container-fluid"  style="position:fixed" >
    <div class="row flex-nowrap" >
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color:#178ca4;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Forum</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none text-white d-sm-inline" >Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="contact.php" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-chat-left-text-fill"></i> <span class="ms-1 d-none d-sm-inline text-white">Contacte</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle text-white" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1" style="  text-decoration: underline;"><?php echo $_SESSION['nom']?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#"><?=$_SESSION['nom']?></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="deconnexion.php">Deconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3" style="padding:1%">
            <!-- message -->
            <div class="container-fluid mt-100">


                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="container bootdey">
                <div class="col-md-12 bootstrap snippets">
                <div class="panel"  style="position:relative">
                  <div class="panel-body">
                    <h1 style="font-size:2em">Envoyer votre commentaire</h1>
                    <form  method="post">

                        <textarea class="form-control" rows="2" placeholder="Votre commentaire..." name="coms"></textarea>
                        <div class="mar-top clearfix"  >
                          <button class="btn btn-sm btn-primary pull-right" type="submit" style="background-color:#178ca4" name="envoyer"><i class="bi bi-send"></i> Envoyer</button>
                        </div>

                    </form>

                  </div>
                </div>

                <div class="panel" style="height:500px;overflow-y:scroll;" >
                    <div class="panel-body" style="padding:10px;position:relative">
                    <?php
                    if(mysqli_num_rows($resultat)!=0){
                    foreach ($comments as $comment) {
                    ?>
                            <!-- commentaire-->
                    <!--===================================================-->

                        <div class="media-block" >                     
                          <div class="media-body" style="width:100%">
                            <!-- information sur la publication -->
                            <div class="mar-btm  olonak" style="margin-bottom:20px;align-items:center">

                              <a class="media-left" href="#"><i style="font-size:40px;color:grey;margin-right:10px" class="bi bi-person-circle"></i></a>

                              <div>                               
                                    <?php 
                                        if($_SESSION['nom']==$comment['nom_personne']){
                                    ?>
                                        <a href="#" class="btn-link text-semibold media-heading box-inline" style="color:#178ca4"><?php echo $comment['nom_personne']; ?></a><span>  (vous)</span>  
                                    <?php
                                        }else{
                                    ?>
                                        <a href="#" class="btn-link text-semibold media-heading box-inline" style="color:#178ca4"><?php echo $comment['nom_personne']; ?></a>
                                    <?php
                                        }
                                    ?>

                                <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - <?= $comment['date_coms'];?>

                                </p>
                              </div>

                            </div>
                            <!-- information sur la publication -->
                            <!---------------------------------------seeeeeeee------------------------------------------------------------>
                            <!-- debut du commentaire -->
                                <p><?php echo $comment['coms'];?></p>
                            <!-- fin du commentaire -->
                            <div class="pad-ver">
                            <form method="post">
                                <div class="btn-group">
                                  <a class="btn btn-sm btn-default btn-hover-success" href="#" style="color:#178ca4"><i class="fa fa-thumbs-up"></i></a>
                                  <a class="btn btn-sm btn-default btn-hover-danger" href="#" style="color:red"><i class="fa fa-thumbs-down"></i></a>
                                </div>
                                <button style="background-color:white;border:none" name="rep" value="rhsdihsp" type="submit" class="btn btn-sm btn-default btn-hover-primary"><i class="bi bi-reply"></i> Repondre</a></button>
                            </form>
                                </div>
                            <hr>
                          </div>
                        </div>

                    <?php
                    }
                    }                                          
                    ?>              
                        <!-- commentaire-->
                    <!--===================================================-->         
                  </div>
                </div>
                </div>
                </div>



            </div>

        </div>
    </div>
</div>


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

