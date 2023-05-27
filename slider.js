document.addEventListener("DOMContentLoaded", function () {
    var photosWrapper = document.querySelector('.js-photos'); 
    var sliderContainer =  document.querySelector('.js-slider'); 
  
    var photoWidth = sliderContainer.offsetWidth; 
    var allPhotos = document.querySelectorAll('.js-photo'); 

    var mouvement = 0;
    var minMouvement = 0;
    var maxMouvement = allPhotos.length - 1; 

  
    function decaleGauche () {
      mouvement = mouvement + 1;
  
      if (mouvement > maxMouvement) { // la variable maxMouvement a été rendue dynamique directement lors de sa création
        retourDebut();
      } else {
        photosWrapper.style.left = mouvement * -photoWidth  + "px"; // je remplace 500 par photoWidth
      }
    }
    
    function retourDebut () {
      mouvement = minMouvement;
      photosWrapper.style.left = "0px";
    }
  
    function decaleDroite () {
      mouvement = mouvement - 1;
  
      if (mouvement < minMouvement) {
        retourFin();
      } else {
        photosWrapper.style.left = mouvement * -photoWidth  + "px"; // je remplace 500 par photoWidth
      }

      setInterval("decaleDroite()",100)
    }
    
    function retourFin () {
      mouvement = maxMouvement;
      photosWrapper.style.left = mouvement * -photoWidth  + "px"; // je remplace 500 par photoWidth
    }
  
    // c'est pour le bouton
    // var btnDecaleGauche = document.querySelector('.js-btn-decale-gauche');
    // var btnDecaleDroite = document.querySelector('.js-btn-decale-droite');
  
    // btnDecaleGauche.addEventListener('click', function() {
    //   decaleGauche();
    // });
  
    // btnDecaleDroite.addEventListener('click', function() {
    //   decaleDroite();
    // });
  })
  
  

