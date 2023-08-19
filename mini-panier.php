<style>
/* Styling du panier */
.cart-drawer {
  position: fixed;
  top: 0;
  right: -300px; /* Démarre en dehors de la vue */
  width: 300px;
  height: 100%;
  background-color: #fff;
  box-shadow: -3px 0 5px rgba(0, 0, 0, 0.2);
  transition: right 0.3s ease-in-out; /* Animation de glissement */
  z-index: 7; /* Ordre d'affichage au-dessus d'autres éléments */
}

/* Fond sombre en arrière-plan */
.overlay {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: none; /* Initialement caché */
  z-index: 2; /* Ordre d'affichage */
}

/* Bouton de fermeture du panier */
.close-button {
  border: none; /* Pas de bordure */
  top: 10px;
  right: 10px;
  cursor: pointer;
}

/* En-tête du panier */
.header-wrapper {
  display: flex;
  flex-direction: row-reverse; /* Place le bouton de fermeture à droite */
  justify-content: space-between;
  padding: 12px;
}

</style>
<div id="cartDrawer" class="cart-drawer">
  <div class="header-wrapper">
    <!-- Bouton de fermeture avec une croix "x" -->
    <button type="button" class="close close-button" id="closeButton" aria-label="Fermer" style="font-size:20px;">
      <span aria-hidden="true">&times;</span>
    </button>
    <!-- En-tête du panier -->
    <div class="text">
      <h5 style="text-align: center;">Panier</h5>
    </div>
  </div>
  <!-- Contenu du panier va ici -->
</div>
<div id="overlay" class="overlay"></div>
<button id="cartButton">Basculer le panier</button>
<script>
// Script JavaScript
const cartButton = document.getElementById('cartButton');
const cartDrawer = document.getElementById('cartDrawer');
const overlay = document.getElementById('overlay');
const closeButton = document.getElementById('closeButton');

// Gestionnaire de clic sur le bouton de bascule du panier
cartButton.addEventListener('click', () => {
  if (cartDrawer.style.right === '' || cartDrawer.style.right === '-300px') {
    // Ouvrir le panier
    cartDrawer.style.right = '0';
    overlay.style.display = 'block';
    document.body.style.overflow = 'hidden'; // Désactiver le défilement
  } else {
    // Fermer le panier
    cartDrawer.style.right = '-300px';
    overlay.style.display = 'none';
    document.body.style.overflow = ''; // Réactiver le défilement
  }
});

// Gestionnaire de clic sur le bouton de fermeture du panier
closeButton.addEventListener('click', () => {
  // Fermer le panier et masquer le fond sombre
  cartDrawer.style.right = '-300px';
  overlay.style.display = 'none';
  document.body.style.overflow = ''; // Réactiver le défilement
});
</script>
