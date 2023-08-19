<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">

    <div class="login form">
      <header>Connexion</header>

      <!-- Se connecter -->
      <form action="#">

        <input type="text" placeholder="Enter your email">
        <input type="password" placeholder="Enter your password">
        <a href="index.php">Mot de passe oublié?</a>
        <input type="button" class="button" value="Login">
      </form>

      <!-- S'inscrire -->
      
      <div class="signup">
        <span class="signup">Vous n'avez pas de compte ?
         <label for="check">S'inscrir</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="#">
        <input type="text" placeholder="Enter your email">
        <input type="password" placeholder="Create a password">
        <input type="password" placeholder="Confirm your password">
        <input type="button" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Vous avez de compte?
         <label for="check">Connexion</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>