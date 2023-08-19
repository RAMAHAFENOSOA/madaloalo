<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['bouton'])){
          $valeurNomRegion = $_POST['bouton'];?>
      <?php
      } else {
          echo "Aucun bouton n'a été cliqué";
      }
    }
?>