<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
<a href="achat.php">achat / </a>
<a href="activite.php">activite /</a>
<a href="resto.php">resto /</a>
<a href="hotel.php">hotel</a>

    <h1 class="text-center">Modification Region </h1>
    <div class="container">
        <form action="insert_region.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="user" class="form-label">Nom provinces</label>
            <input type="text" name="nom_province"  class="form-control">
        </div>

        <div class="form-group">
            <label for="text" class="form-label">Selectionnez le region</label>
            <select name="nom_region"  class="form-select">
                <option selected>selectionnez</option>
                <option value="Analamanga">Analamanga</option>
                <option value="Bongolava">Bongolava</option>
                <option value="Vakinakaratra">Vakinakaratra</option>
                <option value="Diana">Diana</option>
                <option value="Sava">Sava</option>
                <option value="Haute Mahatsiatra">Haute Mahatsiatra</option>
                <option value="Ihorombre">Ihorombre</option>
                <option value="Vatovavy Fitovinany">Vatovavy Fitovinany</option>
                <option value="Melaky">Melaky</option>
                <option value="Sofia">Sofia</option>
                <option value="Betsiboka">Betsiboka</option>
                <option value="Alaotra Mangoro">Alaotra Mangoro</option>
                <option value="Analanjirofo">Analanjirofo</option>
                <option value="Anosy">Anosy</option>
                <option value="Androy">Androy</option>
                <option value="Menabe">Menabe</option>
                <option value="Atsimo Andrefana">Atsimo Andrefana</option>
                <option value="Itasy">Itasy</option>
                <option value="Amoron'i Mania">Amoron'i Mania</option>
                <option value="Atsimo Antsinanana">Atsimo Antsinanana</option>
                <option value="Boeny">Boeny</option>
                <option value="Atsinanana">Atsinanana</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="pass" class="form-label">Description</label>
            <input type="text" name="description"  class="form-control">
        </div>    

        <div class="form-group">
            <label for="pass" class="form-label">Description1</label>
            <input type="text" name="description1"  class="form-control">
        </div>   

        <div class="form-group">
            <label for="pass" class="form-label">Description2</label>
            <input type="text" name="description2"  class="form-control">
        </div>   

        <div class="form-group">
            <label for="pass" class="form-label">Description3</label>
            <input type="text" name="description3"  class="form-control">
        </div>    

        <div class="form-group">
            <label for="pass" class="form-label">Code Postal</label>
            <input type="text" name="code_postal"  class="form-control">
        </div>    

        <div class="form-group">
            <label for="pass" class="form-label">Image region</label>
            <input type="file" name="image_region"  class="form-control">
        </div>   

        <div class="form-group">
            <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
        </div>
        </form> 
    </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
        <a href="../index.php" class="btn btn-warning mt-5"> Accueil </a>
    <div>
</body>
</html>