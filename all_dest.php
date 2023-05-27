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
    $compoRequete = substr_replace($compoRequete, " WHERE", 0, 4);
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;900&display=swap" rel="stylesheet">
    <title>Destinations</title>
</head>
<body>
    
    <?php include("navbar.php") ?>

<!-- SLIDER DES DESTINATIONS -->
    <img src="img/slider_alldest/australie2.jpg" class="presentation_image" alt="">
     

<!-- SEARCH BAR -->
    <form action="all_dest.php" method="get"> 

      <div class="field">
        <img src="img/localisation.png"  alt="">
        
          <div class="select">
           
          <label for="pays">Pays</label>
            <select name="pays" id="pays">
              <option value="">Où ?</option>
              <option value="Angleterre">Angleterre</option>
              <option value="Malte">Malte</option>
              <option value="Etats-Unis">Etats-Unis</option>
              <option value="Canada">Canada</option>
              <option value="Australie">Australie</option>
            </select>
          </div> 
      </div>

      <div class="field field-periode">
        <img src="img/calendar.png" alt="">
        
          <div class="select">
          <label for="periode">Période</label>
          
            <select name="vacances" id="periode">
              <option value="">Quand ?</option>
              <option value="vacances_de_printemps">Vacances de printemps</option>
              <option value="vacances_ete">Vacances d'été</option>
              <option value="vacances_toussaint">Vacances de la Toussaint</option>
            </select>
          </div>
      </div>
      <!-- je dois mettre exactement ce qu'il y a ecrit dans value dans ma base de donnée pour vacances donc je laisse les _  -->

      <div class="field">
        
        <img src="img/utilisateurs.png"   alt="">
       
          <div class="select">
          <label for="age">Âge</label>
            <select name="age_dest" id="age">
              <option value="">Qui ?</option>
              <option value="7-10 ans">7-10 ans</option>
              <option value="11-14 ans">11-14 ans</option>
              <option value="15-18 ans">15-18 ans</option>
            </select>
          </div>
      </div>
<!-- pour l'instant field-periode est pas necessaire -->
      <div class="field field-activite">
        
        <img src="img/activites.png"  alt="">
        
          <div class="select">
           
          <label for="activite">Activités</label>
            <select name="activites" id="activite" >
              <option class="optnull" value="">Quoi ?</option>
              <option value="parcours sportif">Parcours sportif</option>
              <option value="parcours artistique">Parcours artistique</option>
              <option value="parcours découverte">Parcours découverte</option>
            </select>
          </div>
      </div>

      <input type="submit" class="btn-search" value="Rechercher">

    </form>

    <?php
    if (empty($result)) {
        include('template/non_trouve.html');
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
    <!-- <script src="slider.js"></script> -->
</body>
</html>