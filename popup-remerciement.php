<style>
    /* styles.css */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0 0 0 / 72%); /* Dark overlay */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .popup {
        background-color: white;
        padding-bottom: 2%;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column; /* Added to arrange content vertically */
        align-items: center; /* Center content horizontally */
        border-radius: 15px;
        flex-direction: column;
        align-content: center;
        align-items: center;
        flex-wrap: wrap;
        max-width: 360px;
    }

    .popup-image {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
        border-top-left-radius: 14px;
        border-top-right-radius: 14px;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }

    .thanks-message {
        margin-top: 20px;
        text-align: center;
    }

    .close-popup {
        margin-top: 10px;
        border: none;
    }

    .popup-content {
        padding:3%;
        text-align:center;
    }
</style>

<!-- Image Popup -->
<div class="popup-overlay">
    <div class="popup">
        <img src="assets/img/thank-you.PNG" alt="Popup Image" class="popup-image">

        <h3 id="popup-title"></h3>
        <p class="popup-content">Nous tenons à exprimer notre sincère gratitude pour avoir choisi Madaloalo comme votre guide pour découvrir les meilleures destinations à Madagascar. Votre soutien est ce qui nous motive à continuer à fournir des informations de qualité et à vous aider à vivre des expériences extraordinaires dans ce magnifique pays. Merci d'être un membre précieux de la communauté Madaloalo. Votre aventure passionnante ne fait que commencer !</p>
        <button class="close-popup form-submit" style="background-color: #38b0e0;">Commencer le voyage !</button>
        <div class="social-links mt-3">
          <a href="https://www.twitter.com" class="twitter">    <i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com" class="facebook">   <i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com" class="instagram">  <i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com" class="linkedin">   <i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</div>


<script>
    // script.js
    document.querySelectorAll(".popup-overlay")[0].style.display = "none";
    document.querySelectorAll(".popup")[0].style.display = "none";
    document.querySelectorAll(".popup-overlay")[0].style.display = "none"; // Hide thanks popup initially
    document.addEventListener("DOMContentLoaded", function () {
        const openPopupButton = document.getElementById("open-popup");
        const closeButtons = document.querySelectorAll(".close-popup");

        closeButtons.forEach((button) => {
            button.addEventListener("click", function () {
                const popupOverlay = button.closest(".popup-overlay");
                popupOverlay.style.display = "none";
                window.location.replace('index.php');   
            });
        });
    });
</script>
