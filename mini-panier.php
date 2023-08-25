<style>
/* Styling du panier */
.remove-button {
  background: none;
  border: none;
}

.item-right {
  margin-left: 15px;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
}

.item-image {
    max-width: 65px;
    height: auto;
}

.cart-item {
  padding-bottom: 1rem;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
}

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
  background-color: rgb(0 0 0 / 72%);
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

.closeButtonBottom {
  position: fixed;
    bottom: 1%;
    position: fixed;
    bottom: 1%;
    width: 300px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: flex-end;
    justify-content: center;
}

#closeButtonBottom {
  background: #68A4C4;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
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
    <div id="cartAjouter" style="overflow-y:scroll;width:100%;height:80%">
        
    </div>
    <div class="closeButtonBottom">
    <button type="button" class="close close-button" id="closeButtonBottom" aria-label="Fermer" style="font-size:20px;">
      <span aria-hidden="true">Continuer Achat</span>
    </button>
    </div>
  <!-- Contenu du panier va ici -->
</div>
<div id="overlay" class="overlay"></div>
<script>
// Script JavaScript
const cartButton = document.getElementById('cartButton');
const cartDrawer = document.getElementById('cartDrawer');
const overlay = document.getElementById('overlay');
const closeButton = document.getElementById('closeButton');
const closeButtonBottom = document.getElementById('closeButtonBottom'); // New close button


// Gestionnaire de clic sur le bouton de bascule du panier
cartButton.addEventListener('click', () => {
  
  if (cartDrawer.style.right === '' || cartDrawer.style.right === '-300px') {
    // Ouvrir le panier
    let panier = JSON.parse(localStorage.getItem('panier')) || [];
    localStorage.setItem('panier', JSON.stringify(panier));
    afficherContenuPanier(panier);
    function afficherContenuPanier(panier) {
    var cartAjouter = document.getElementById('cartAjouter');
    if (!cartAjouter) {
        console.error("L'élément avec l'ID 'cartAjouter' n'a pas été trouvé.");
        return;
    }

    var contenuHTML = '<ul class="cart-list">';
    for (var i = 0; i < panier.length; i++) {
      console.log(panier);
        var imageURL =  panier[i].img; // Get image URL for the specific product ID
        contenuHTML += '<li class="cart-item"><div class="item-left"><img class="item-image" src="' + panier[i].img + '" alt="Product Image"></div>' +
                       '<div class="item-right"><div class="item-info">Produit: ' + panier[i].titre + '</div>' +
                       '<div class="item-info">Quantité: ' + panier[i].quantite + '</div>' +
                       '<button onclick="supprimerProduit(' + i + ')" class="remove-button"><i class="bi bi-trash"></i></button></div></li>';
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

// Gestionnaire de clic sur le bouton de fermeture du panier (en bas)
closeButtonBottom.addEventListener('click', () => {
  // Fermer le panier et masquer le fond sombre
  cartDrawer.style.right = '-300px';
  overlay.style.display = 'none';
  document.body.style.overflow = ''; // Réactiver le défilement
});
</script>
</body>
</html>
