<style>
  body {
    margin: 0;
    padding: 0;
  }

  #searchOverlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    z-index: 4; /* Lower z-index than slide-down-section */
  }

  #slide-down-section {
    position: fixed;
    top: 30px;
    left: 0;
    width: 100%;
    display: none;
    z-index: 5;
    display: none;
    background: white;
    height: 80px;
  }

  .slide-down-animation {
    animation-name: slideDown;
    animation-duration: 1s;
  }

  .search-section-header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 12px;
  }

  .search-button {
    background: #68A4C4;
    border: 0;
    padding: 3px 23px;
    color: #fff;
  }

  @keyframes slideDown {
    from {
      transform: translateY(-100%);
    }
    to {
      transform: translateY(0);
    }
  }
</style>

<div id="searchOverlay"></div>

<section id="slide-down-section">
<div class="search-section-header">
    <h5 style="text-align: center;"></h5>
    <form class="search-form" method="GET" action="afficherRecherche.php">
        <input type="text" class="search-input" name="s" placeholder="Ecrivez votre recherche..." autocomplete="off" style="width: 850px; height: 40px; border: 2px solid darkgray; outline: none;">
        <button type="submit" class="search-button" name="envoyer" style="height: 40px;">Recherche</button>
    </form>
    <button type="button" class="close-button" id="close-button" aria-label="Fermer" style="font-size:20px; height: 30px;">
    <span aria-hidden="true">&times;</span>
    </button>



    </section>
</div>
</section>
<script>
  const searchButton = document.getElementById('search-button');
  const slideDownSection = document.getElementById('slide-down-section');
  const closeSearchButton = document.getElementById('close-button');
  const searchOverlay = document.getElementById('searchOverlay');

  searchButton.addEventListener('click', () => {
    slideDownSection.style.display = 'block';
    searchOverlay.style.display = 'block'; // Show the searchOverlay
    slideDownSection.classList.add('slide-down-animation');
  });

  closeSearchButton.addEventListener('click', () => {
    slideDownSection.classList.remove('slide-down-animation');
    slideDownSection.style.display = 'none';
    searchOverlay.style.display = 'none'; // Hide the searchOverlay
  });
</script>
