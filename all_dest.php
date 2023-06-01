<?php
include("connexion.php");
session_start();

$requete = "SELECT * FROM destination";
$compoRequete = "";

if (!empty($_GET)) {
    foreach ($_GET as $param => $value) {
        if (!empty($value)) {
            $compoRequete .= " AND $param LIKE '$value'";
        }
    }
    if ($compoRequete != "") {
        $compoRequete = substr_replace($compoRequete, " WHERE", 0, 4);
    }
    $requete .= $compoRequete;
}

$stmt=$db->query($requete);
$result=$stmt-> fetchall(PDO::FETCH_ASSOC);



// die(var_dump($result));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/holilearn_logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;900&display=swap" rel="stylesheet">
    <title>Destinations</title>
</head>
<body>
    
    <?php include("navbar.php") ?>

<!-- SLIDER DES DESTINATIONS -->
    <!-- <img src="img/slider_alldest/australie2.jpg" class="presentation_image" alt=""> -->
    <div class="js-slider presentation_image">
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
                <img src="img/slider_alldest/malte2.jpg" alt="">
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
     

<!-- SEARCH BAR -->
    
  <?php
    include("search_bar.php");
   
    if (empty($result)) {
        include('non_trouve.html');
    }
  ?>

    <!-- MES CARTES VOYAGES -->
  
    <div class="cardcontainer"> <!--container qui possede toutes les cartes -->
    <?php
    foreach($result as $row){?> 
      
        <a href="dest.php?dest=<?=$row["id"]?>">
        <div class="card"> <!--css pour une seule carte-->
          <img src="<?=$row["drapeau_pays"]?>" class="img_drapeau_usa" alt="">
          <div class="img_card" style="background-image:url('<?=$row["img_card"]?>')"></div> 
          <h3><?=$row["nom_parcours"]?></h3> 
          <div class="people">
            <img src="img/people2.png" width="30px" alt=""> 
            <p><?=$row["age_dest"]?></p>
          </div>
          <div class="calendar">
            <img src="img/calendar2.png" width="30px" alt="">
            <p><?=$row["periode"]?></p>
          </div>
          <div class="activities_logo">
            <img src="img/activities3.png" width="30px" alt="">
            <p><?=$row["resume_act"]?></p>
          </div>
          <div class="bloc_pays_et_prix">
            <p class="pays"><?=$row["pays"]?></p>
            <div class="bloc_prix">
              <p>A partir de </p>
              <p class="prix"><?=$row["prix"]?> €</p>
            </div>
        </div>

        </div>
        </a>
    <?php
    }
    ?>
       

    </div>

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
    <script src="slider.js"></script>
</body>
</html>