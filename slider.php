<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slider.css">
    <title>Slider</title>
</head>
<body>
    
<div class="js-slider">
        <div class="js-photos">
            <!-- CLONE PRÉSENT AU DÉBUT DU SLIDER, VISUELLEMENT IDENTIQUE À LA SLIDE RÉELLE 3 -->
            <div class="js-photo clone">
                <img src="img/slider_alldest/londres3.jpg" alt="">
            </div>

            <!-- LES 3 SLIDES RÉELLES -->
            <div class="js-photo reel-slide">
                <img src="img/slider_alldest/la_slider.jpg" alt="">
            </div>

            <div class="js-photo reel-slide">
                <img src="img/slider_alldest/canada2.jpg" alt="">
            </div>

            <div class="js-photo reel-slide">
                <img src="img/slider_alldest/australie2.jpg" alt="">
            </div>

            <div class="js-photo reel-slide">
                <img src="img/slider_alldest/malte.jpg.jpg" alt="">
            </div>

            <div class="js-photo reel-slide">
                <img src="img/slider_alldest/londres3.jpg" alt="">
            </div>

            <!-- CLONE PRÉSENT À LA FIN DU SLIDER, VISUELLEMENT IDENTIQUE À LA SLIDE RÉELLE 1 -->
            <div class="js-photo clone">
                <img src="img/slider_alldest/la_slider.jpg" alt="">
            </div>
        </div>

        <div class="js-navigation">
            <button class="js-btn-decale-droite">
                <span class="arrow"></span>
            </button>
            <button class="js-btn-decale-gauche">
                <span class="arrow"></span>
            </button>
        </div>
    </div>



    <script src="slider.js"></script>
</body>
</html>