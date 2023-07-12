<?php 
include "../database.php";
    if(isset($_POST['signup'])) 
    {
            $user = $_POST['name'];
            $email = $_POST['email'];   
            $pass = $_POST['pass'];
        
            // SQL query to insert user data into the personne table
            $query= "INSERT INTO personne(nom_personne, email,mot_de_passe) VALUES('{$user}','{$email}','{$pass}')";
            $add_user = mysqli_query($conn,$query);
        
            // displaying proper message for the user to see whether the query executed perfectly or not 
            if (!$add_user) {
                echo "something went wrong ". mysqli_error($conn);
            }

            else { 
                echo "<script type='text/javascript'>alert('User added successfully!')</script>";
                header("location:../index.php");
            }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="main" style="padding:20px 0;">
         <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container" >

        <div class="d-flex justify-content-between align-items-center" style="display:flex;
         justify-content:space-between; align-items:center; background: #f3f8fa ;padding:20px ">
          <h2 style="padding-left:15px">S'inscrire</h2>

          <ol style="padding-right:15px ; font-size:1.5em;" >
            <li><a href="../index.php ">Accueil</a></li>
            <li>S'inscrire</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Blog Section -->

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">S'inscrire</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Votre nom" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre e-mail" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mot de passe" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Réécrire votre mot de passe" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte tous les <a href="#" class="term-service">Termes de Services</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Inscription" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">J'ai déjà un compte</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>