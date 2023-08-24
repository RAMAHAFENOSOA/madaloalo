<?php
include "database.php";
$query = "SELECT * FROM achat";
$resultAchat = mysqli_query($conn,$query);
$achats = mysqli_fetch_all($resultAchat, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Achat</title>
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


</head>

<body>
<?php include "header.php" ?>

  <main id="main">

    <!-- ======= Our Achat Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Achat</h2>
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li>Achat</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Achat Section -->

    <!-- ======= Achat Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-sandale">Sandale</li>
              <li data-filter=".filter-vase">Vase</li>
              <li data-filter=".filter-art">Art</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <?php foreach ($achats as $achat): ?>
          <?php if ($achat['categorie'] == "sandale") { ?>
            <div class="col-lg-4 col-md-6 portfolio-wrap filter-sandale">
            <form action="#" method="post">
            <div class="portfolio-item" id="element--<?php echo($achat['id_achat'])?>">
              <img src="assets/img/kapakapa/<?php echo($achat['image_objet'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($achat['nom_objet'])?></h3>
                <div class="product_lower_section">
                  <a href="assets/img/kapakapa/<?php echo($achat['image_objet'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($achat['prix_objet'])?>"><i class="bx bx-fullscreen" style="position:absolute; left:45
                  %;  "></i></a>
                </div> 
              </div>
            </div>
            <div class="product_lower_section">
              <p><?php echo($achat['prix_objet'])?></p>
              <div class="quantity-selector">
                  <input type="hidden" name="id_article" value="<?php echo($achat['id_achat'])?>">
                  <button type="button" class="quantity-button-minus"><i class="bi bi-dash" id="<?php echo($achat['id_achat'])?>" onclick="decrementQuantity()"></i></button>
                  <input name="quantite" class="quantity-selector-input" id="quantity-selector<?php echo($achat['id_achat'])?>" value="1">
                  <button type="button" class="quantity-button-plus"><i class="bi bi-plus" id="<?php echo($achat['id_achat'])?>" onclick="incrementQuantity()"></i></button>
                  <!-- <button type="submit" class="icon-button quantity-button"><i class="bi bi-cart" id="<?php echo($achat['id_achat'])?>" onclick=" ajoutPanier()"></i></button> -->
                  <i class="bi bi-cart" id="<?php echo($achat['id_achat'])?>" onclick=" ajoutPanier()"></i>
              </div>
            </div>
          </form>
          </div>
          <?php } ?>
          <?php endforeach; ?>

          <?php foreach ($achats as $achat): ?>
          <?php if ($achat['categorie'] == "vase") { ?>
            <div class="col-lg-4 col-md-6 portfolio-wrap filter-vase">
            <form action="#" method="post">
            <div class="portfolio-item" id="element--<?php echo($achat['id_achat'])?>">
              <img src="assets/img/vases/<?php echo($achat['image_objet'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($achat['nom_objet'])?></h3>
                <div class="product_lower_section">
                  <a href="assets/img/vases/<?php echo($achat['image_objet'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($achat['prix_objet'])?>"><i class="bx bx-fullscreen"></i></a>
                </div> 
              </div>
            </div>
            <div style="display:flex;justify-content:space-between">
              <p><?php echo($achat['prix_objet'])?></p>
              <div class="quantity-selector">
                  <input type="hidden" name="id_article" value="<?php echo($achat['id_achat'])?>">
                  <button type="button" class="quantity-button-minus"><i class="bi bi-dash" id="<?php echo($achat['id_achat'])?>" onclick="decrementQuantity()"></i></button>
                  <input name="quantite" class="quantity-selector-input" id="quantity-selector<?php echo($achat['id_achat'])?>" value="1">
                  <button type="button" class="quantity-button-plus"><i class="bi bi-plus" id="<?php echo($achat['id_achat'])?>" onclick="incrementQuantity()"></i></button>
                  <!-- <button type="submit" class="icon-button quantity-button"><i class="bi bi-cart" id="<?php echo($achat['id_achat'])?>" onclick=" ajoutPanier()"></i></button> -->
                  <i class="bi bi-cart" id="<?php echo($achat['id_achat'])?>" onclick=" ajoutPanier()"></i>
              </div>
            </div>
          </form>
          </div>
          <?php } ?>
          <?php endforeach; ?>

          <?php foreach ($achats as $achat): ?>
          <?php if ($achat['categorie'] == "art") { ?>
            <div class="col-lg-4 col-md-6 portfolio-wrap filter-art">
            <form action="#" method="post">
            <div class="portfolio-item" id="element--<?php echo($achat['id_achat'])?>">
              <img src="assets/img/hosidoko/<?php echo($achat['image_objet'])?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3> <?php echo($achat['nom_objet'])?></h3>
                <div class="product_lower_section">
                  <a href="assets/img/hosidoko/<?php echo($achat['image_objet'])?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($achat['prix_objet'])?>"><i class="bx bx-fullscreen"></i></a>
                </div> 
              </div>
            </div>
            <div style="display:flex;justify-content:space-between">
              <p><?php echo($achat['prix_objet'])?></p>
              <div class="quantity-selector">
                  <input type="hidden" name="id_article" value="<?php echo($achat['id_achat'])?>">
                  <button type="button" class="quantity-button-minus"><i class="bi bi-dash" id="<?php echo($achat['id_achat'])?>" onclick="decrementQuantity()"></i></button>
                  <input name="quantite" class="quantity-selector-input" id="quantity-selector <?php echo($achat['id_achat'])?>" value="1">
                  <button type="button" class="quantity-button-plus"><i class="bi bi-plus" id="<?php echo($achat['id_achat'])?>" onclick="incrementQuantity()"></i></button>
                  <!-- <button type="submit" class="icon-button quantity-button"><i class="bi bi-cart"  id="<?php echo($achat['id_achat'])?>" onclick=" ajoutPanier()"></i></button> -->
                  <i class="bi bi-cart" id="<?php echo($achat['id_achat'])?>" onclick=" ajoutPanier()"></i>
              </div>
            </div>
          </form>
          </div>
          <?php } ?>
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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
  <script>
    function incrementQuantity() {
      // console.log('l article numero '+event.target.id+' a ete cliquee');
      // Sélectionne l'élément HTML avec l'ID 'quantity'
      var quantity = document.getElementById('quantity-selector'+event.target.id);
      // Récupère la valeur actuelle de la quantité en tant que nombre
      var currentQuantity = parseInt(quantity.value);
       // Augmente la valeur de la quantité de 1
       quantity.value = currentQuantity + 1;
      
      // Ce code commence par sélectionner un élément HTML qui a l'identifiant 'quantity'. Ensuite, il prend la valeur actuelle de cet élément (supposons que c'est un champ de saisie) et la convertit en nombre (au lieu de texte). Enfin, il ajoute 1 à cette valeur et met à jour la valeur dans l'élément HTML 'quantity'. En résumé, ce code incrémente la quantité affichée par 1.
    }

    function decrementQuantity() {
      // console.log('l article numero '+event.target.id+' a ete cliquee');
      var quantity = document.getElementById('quantity-selector'+event.target.id);  // Sélectionne l'élément HTML avec l'ID 'quantity'
      var currentQuantity = parseInt(quantity.value); // Récupère la valeur actuelle de la quantité en tant que nombre
      if (currentQuantity >= 1) {
        quantity.value = currentQuantity - 1;
      }
    }

    function ajoutPanier() {
        var quantitySelector = document.getElementById('quantity-selector'+event.target.id);
        var selectedQuantity = parseInt(quantitySelector.value);
        let panier = JSON.parse(localStorage.getItem('panier')) || [];
        const produitExistant = panier.find(produit => produit.id === event.target.id);
        if (produitExistant) {
            produitExistant.quantite += selectedQuantity;
        } else {
            panier.push({ id: event.target.id, quantite: selectedQuantity });
        }
        localStorage.setItem('panier', JSON.stringify(panier));
        afficherContenuPanier(panier);
        // Ouvrir le panier
        cartDrawer.style.right = '0';
        overlay.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Désactiver le défilement
    }

    function afficherContenuPanier(panier) {
        var cartAjouter = document.getElementById('cartAjouter');
        if (!cartAjouter) {
            console.error("L'élément avec l'ID 'cartAjouter' n'a pas été trouvé.");
            return;
        }

        var contenuHTML = '<ul>';
        for (var i = 0; i < panier.length; i++) {
            contenuHTML += '<li>Produit ID: ' + panier[i].id + ', Quantité: ' + panier[i].quantite +
                           '<button onclick="supprimerProduit(' + i + ')" style="border:none;background:none;"><i class="bi bi-trash"></i></button></li>';
        }
        contenuHTML += '</ul>';
        cartAjouter.innerHTML = contenuHTML;
    }

    function supprimerProduit(index) {
        let panier = JSON.parse(localStorage.getItem('panier')) || [];
        if (index >= 0 && index < panier.length) {
            panier.splice(index, 1);
            localStorage.setItem('panier', JSON.stringify(panier));
            afficherContenuPanier(panier);
        }
    }

  </script>

</body>

</html>