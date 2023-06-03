<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/holilearn_logo.png">
    <link rel="stylesheet" href="style_about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;900&display=swap" rel="stylesheet">
    <title>HoliLearn À propos</title>
</head>
<body>
    
        <?php include("navbar.php") ?>

        <div class="lineconcept">
            <div class="line"></div>
            <h1 class="titre_concept">Le concept</h1>
            <div class="line"></div>
        </div>

        <section id="contenu" class="concept">
            <div class="img_concept"></div>
            <div class="txt_concept">
                <p><span>HoliLearn</span> est un organisme de séjours linguistiques pour les jeunes de 7 à 18 ans. En effet, aujourd’hui l’anglais est la langue officielle dans le monde. Il est donc très important de savoir la comprendre et de s’exprimer en anglais tant d’un point de vue personnel que professionnel.<br><br>
                <span>Mais donc pourquoi cibler les jeunes ? </span><br>
                C’est à cet âge là que le cerveau se développe et fonctionne comme une éponge. Ainsi, il peut absorber un maximum d’informations et donc apprendre une langue beaucoup plus rapidement. <br> <br>
                <span>HoliLearn se fonde sur 3 valeurs : </span> <br>
                <span class="valeurs"> 01. APPRENDRE</span> : Le but du séjour linguistique est avant tout l’apprentissage ou l’amélioration de son niveau d’anglais grâce aux cours donnés pendant les matinées. <br> <br>
                <span class="valeurs">02. S’AMUSER </span>: Le séjour linguistique prône l’apprentissage par l’amusement. En effet, il s’agit d’une ou deux semaines de vacances où les enfants pourront profiter de nombreuses activités et se faire de nouvelles amitiés. <br><br>
                <span class="valeurs">03. DÉCOUVRIR </span>: Un séjour linguistique c’est également la découverte d’un nouveau pays et de nouvelles cultures. Ainsi, grâce aux nombreuses visites proposées par notre organisme, les jeunes ne pourront qu’être émerveillés face à tous ce qu’ils découvriront. 
                </p>
            </div>
        </section>

        <div class="lineconcept">
            <div class="line"></div>
            <h1 class="titre_concept">La créatrice</h1>
            <div class="line"></div>
        </div>

        <section class="creatrice">
            <div class="txt_creatrice">
                <p>Je m’appelle Anaïs et je suis étudiante en première année de BUT MMI (Bachelor Universitaire de Technologie de Métiers du Multimédia et de l’Internet). Dans le cadre d’un projet scolaire où l’on devait réaliser un site de réservation, j’ai développé l’intégralité de ce site Internet. Cela va de la recherche du concept au développement front-end et back-end en passant par le design ou encore la création de la base de données.</p>
            </div>
            <div class="img_creatrice"></div>
        </section>

        <div class="lineconcept">
            <div class="line"></div>
            <h1 class="titre_concept">Mentions légales</h1>
            <div class="line"></div>
        </div>

        <section class="mentions_legales">
            <div class="ml">
                <div class="bloc_info">
                    <h2>Créatrice</h2>
                    <p>Anaïs MICHEL</p>
                    <p>Mail : anais.michel2004@gmail.com</p>
                </div>

                <div class="bloc_info">
                    <h2>Propiétés intelectuelles</h2>
                    <p>Les images proviennent de banques d’images tel que Unsplash et Pexel. Les icones proviennent quant à elles de Flaticon.</p>
                </div>

                <div class="bloc_info">
                    <h2>Hébergeur</h2>
                    <p>o2switch</p>
                    <p>222-224 Boulevard Gustave Flaubert</p>
                    <p>63000 Clermond-Ferrand</p>
                    <p>Siret 510 909 80700024</p>
                </div>

                <div class="bloc_info">
                    <h2>Politique de gestion des données personnelles</h2>
                    <p>Lorsque un client passe une commande, le prénom, le nom et l’adresse e-mail qu’il indique dans le formulaire sont collectés. La collecte de ces données est donc obligatoire dans le cas d’une commande.</p>
                    <p>Ces données sont collectées dans l’objectif de permettre à HoliLearn d’envoyer le mail de confirmation.</p>
                    <p>La responsable du traitement des données ainsi que le destinataire des données est : Anaïs MICHEL joignable à l’adresse anais.michel2004@gmail.com</p>
                </div>
            </div>
            

        </section>


        <!-- FOOTER -->
    <footer>
        <section class="explications_proj">
            <img src="img/holilearnlogo_text.png" alt="">
            <p>Holilearn est un organimse de séjours linguistiques pour les jeunes de 7 à 18 ans. De cette manière, ces derniers peuvent apprendre tout en s'amusant.</p>
        </section>

        <section class="plan_site">
            <h3>Plan du site</h3>
            <a href="index.php">Accueil</a>
            <a href="destinations.php">Destinations</a>
            <a href="about.php">À propos</a>
            <a href="panier.php">Panier</a>
            </div>
        </section>

        <section class="about">
            <h3>À propos</h3>
            <a href="about.php#concept">Le concept</a>
            <a href="about.php#creatrice">La créatrice</a>
            <a href="about.php#mention_legale">Mentions légales</a>
            
        </section>
    </footer>
    
    <script src="script.js"></script>
  
</body>
</html>