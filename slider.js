document.addEventListener("DOMContentLoaded", function() {


  // on crée et initialise les varibales les variables
  var photosContainer = document.querySelector('.js-photos');
  var sliderGlobalContainer =  document.querySelector('.js-slider');
  var photoWidth = sliderGlobalContainer.offsetWidth;

  // on crée un varaible qui continet seulement les 3 photos non clonées
  var allReelPhotosArray = document.querySelectorAll('.js-photo.reel-slide'); 

  var mouvement = 1; // le mouvement 0 représente notre clone c'ets pourquoi on est sur 1
  var minMouvement = 0;
  var maxMouvement = allReelPhotosArray.length + 1; //il y a plus un car il ne faut pas oublié notre clone la la taille des photos réelle est 3 mais il nous reste le clone donc +1


  function decaleGauche () {
    mouvement = mouvement + 1;

    if (mouvement == maxMouvement) {
      retourDebut(); // si je me dirige vers le clone tout à droite soit maxMouvement alors je suis actuellement positionnée sur la dernière slide réelle 3 et que je veux retourner au début sans que cela ne soit perceptible c'ets pourquoi j'appelle la fonction retour debut
    } else {
      photosContainer.style.left = mouvement * -photoWidth  + "px";
    }
  }
  
  function retourDebut () {
    mouvement = minMouvement;
    photosContainer.style.transition = '0s'; // on dit 0s pour passé de la slide 3 a la meme cloné car comme ca on se rend pas compte de la transition ett on arrive a revenir au début
    photosContainer.style.left = "0px";
    // => saut de la slide réelle 3 vers sa slide clonnée en début de slider, non visible par l'utilisateur

    setTimeout( function () {
      mouvement = minMouvement + 1;
      photosContainer.style.transition = 'left 0.6s ease-out';
      photosContainer.style.left = mouvement * -photoWidth  + "px";
    }, 5)
  }


  function decaleDroite () {
    mouvement = mouvement - 1;

    if (mouvement == minMouvement) { 
      retourFin();
    } else {
      photosContainer.style.left = mouvement * -photoWidth  + "px";
    }
  }


  
  // meme pricnipe que pour retour debut, on va sur le clone en 0s pour ne pas voir la transition
  function retourFin () {
    mouvement = maxMouvement;
    photosContainer.style.transition = '0s';
    photosContainer.style.left = mouvement * -photoWidth  + "px";

    setTimeout( function () {
      mouvement = maxMouvement - 1;
      photosContainer.style.transition = 'left 0.6s ease-out';
      photosContainer.style.left = mouvement * -photoWidth  + "px";
    }, 5)
  }

  // pour que le slider slide tout seul au bout de 8s
  setInterval(decaleGauche, 8000);

  // Mettre à jour la taille des diapositives lorsque la fenêtre est redimensionnée mais pour que ca fonctionne il faut refresh la page quand on a redimensionné a la taille qu'on veut
  visualViewport.addEventListener("resize", () => {
    photoWidth = sliderGlobalContainer.offsetWidth;
  });


  // On crée des varaibles pour quand on clic sur un bouton ca applique fonction decale droite ou decale gauche
  var btnDecaleGauche = document.querySelector('.js-btn-decale-gauche');
  var btnDecaleDroite = document.querySelector('.js-btn-decale-droite');

  btnDecaleGauche.addEventListener('click', function() {
    decaleGauche();
  })

  btnDecaleDroite.addEventListener('click', function() {
    decaleDroite();
  })
})