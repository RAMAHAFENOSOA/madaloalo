
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire</title>
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Main js -->
    <script src="js/main.js"></script> 


    <link href="assets/css/style.css" rel="stylesheet">
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
    include "header.php";
include "database.php";
if(isset($_POST['signin'])) 
{
    // Get the username and password from the form
    $username = $_POST['your_name'];
    $password = $_POST['your_pass'];

    // Prepare and execute the query
    $stmt = mysqli_prepare($conn, "SELECT * FROM personne WHERE nom_personne = ? AND mot_de_passe = ?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    // Check if a matching user is found
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) == 1) {
        // User exists, do something (e.g., redirect to a member area)
        echo "Connexion réussie! Bonjour, $username!";
        echo "<script type='text/javascript'>alert('Connexion réussie! Bonjour, $username!')</script>";
        echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
        $_SESSION['nom']=$username;
    } else {
        // User does not exist or credentials are incorrect
        echo "Mot de passe ou utilisateur invalide";
        echo "<script type='text/javascript'>alert('Mot de passe ou utilisateur invalide')</script>";
    }

    // Close the database connection
    mysqli_stmt_close($stmt);
}
 ?>

        <!-- Sing in  Form -->
        <section class="sign-in">
        <section class="breadcrumbs">

      </div>
        </section><!-- End About Us Section -->
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Créer un compte</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Se connecter</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Votre nom" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Mot de passe" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Se souvenir de moi</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Se connecter" />
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php include "footer.php" ?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>