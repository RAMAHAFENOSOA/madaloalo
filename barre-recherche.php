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
    text-align: center;
    align-items: flex-start;
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 12px;
    flex-wrap: wrap;
    align-content: flex-start;
  }

  input{
    position: relative;
    display: inline-block;
    font-size: 20px;
    box-sizing: border-box;
    transition: .5s;
  }
  
  .search-form {
    width: 75%;
    height:50%;
  }

  .search-button {
    position: relative;
    background: #68A4C4;
    border: 0;
    color: #fff;
  }

  .search-button:hover{
    background: #1e4356;
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

<div id="searchOverlay">

  <section id="slide-down-section" style="width: 100%;height: 20%; ">
    <div class="search-section-header">
        
        <form class="search-form" method="GET" action="afficherRecherche.php" >
            <input type="text" class="search-input" name="s" placeholder="Recherche..." autocomplete="off" style="background: #fff;width: 50%;border: 2px solid #68A4C4;outline: none;padding: 0 25px;">
            <input type="submit" class="search-button"  name="envoyer" value="Recherche">
          
        </form>
        <button type="button" class="close-button" id="close-button" aria-label="Fermer" style="font-size:20px; height: 30px;">
        <span aria-hidden="true"><i class="bi bi-x-circle"></i></span>
        </button>
    </div>      
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
