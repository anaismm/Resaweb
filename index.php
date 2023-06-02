<?php
include("connexion.php");
session_start();

$requete="SELECT * FROM destination ORDER BY date_modif DESC LIMIT 4";
// DESC c'est pour avoir les 3 date les plus récentes
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

    <title>Holilearn Accueil</title>
  </head>
<body>
  <!-- A remodifier le header pour que ce soit les photos avec montexte le header et la nav bas c'ets juste les liens  -->
    
        

    <?php include("navbar.php") ?>
    

    <!--  Voir le positionnement des images avec le grid-->
    <section id="accueil" class="accueil">

      <div class="container_acc">
        <div class="img_nyc_acc"></div>
        <div class="img_londres_acc"></div>
        <div class="img_sydney_acc"></div>
        <div class="img_malte_acc"></div>
      </div>

      <div class="titre">
        <h1>Vivez une expérience unique avec Holilearn <br>
          <span>Le numéro 1 des séjours linguistiques !</span>
        </h1>
        <video autoplay muted>
          <source src="avion.mp4" type="video/mp4">
      </div>

    </section>
    
    <?php
    include("search_bar.php");
   
    ?>
  

    <!-- Nouveautés -->
    <main>
      <h2>Nouveautés</h2>

      <div class="new">
        <div class="cardcontainer"> <!--container qui possede toutes les cartes -->

        <?php
      foreach($result as $row){?> 
        
          <a href="dest.php?dest=<?=$row["id"]?>" alt="consultez le produit"> <!--essayer de mettre en php un titre unique pour que alt soit compréhensible-->
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
      </div>


    <section>
          <h2>Nos destinations</h2>

      <!-- SLIDER  -->

      <div class="dest_container">
        <div class="btn-container">
          <img src="img/flgauche.png" class="btn-left" alt="photo precedente">
          <img src="img/fldroite.png" class="btn-right" alt="photo suivante">
        </div>
        <div class="all_dest">
            <a href="all_dest.php?pays=Etats-Unis"><span class=sr-only>Réservez un séjour aux Etats-Unis</span><div class="dest_card etats-unis"><h3>Etats-Unis</h3></div></a>
            <a href="all_dest.php?pays=Angleterre"><span class=sr-only>Réservez un séjour en Angleterre</span><div class="dest_card angleterre"><h3>Angleterre</h3></div></a>
            <a href="all_dest.php?pays=Australie"><span class=sr-only>Réservez un séjour en Australie</span><div class="dest_card australie"><h3>Australie</h3></div></a>
            <a href="all_dest.php?pays=Malte"><span class=sr-only>Réservez un séjour à Malte</span><div class="dest_card malte"><h3>Malte</h3></div></a>
            <a href="all_dest.php?pays=Canada"><span class=sr-only>Réservez un séjour au Canada</span><div class="dest_card canada"><h3>Canada</h3></div></a>
        </div>    
    </section>

      <hr>
      <h3 class="titre_acti_cours">Un séjour associant des cours d’anglais et des activités, la recette pour mieux progresser ! </h4>

      <!-- BLOC COURS ET ACTIVITES -->
      <div class="cours_et_act">
        <div class="cours">
          <img src="img/livre2.png" width="20%" alt="">
          <h6>Les cours</h6>
          <p>Nous vous proposons des cours de langues efficaces pour progresser rapidement. En effet, grâce à nos petits groupes de niveaux de 1 à 15 jeunes, ces derniers peuvent enrichir leur compétences grâce à des travaux aussi bien écrits que oraux. De plus, ils apprennent à développer leur confiance en soi et leur motivation afin de s’exprimer avec plus d’aisance.  Nos professeurs sont des professionnels compétents et attentifs aux attentes et objectifs de chaque jeune</p>
        </div>

        <div class="activities">
          <img src="img/activites2.png" width="20%" alt="">
          <h6>Les activités</h6>
          <p>Si le progrès en langue constitue une de nos priorité, nous n’en oublions pas l’importance de l’épanouissement personnel et du besoin de s’amuser. C’est pourquoi nous proposons un large choix d’activités tel que du football, basketball, volleyball ou encore tennis mais également, du théâtre, de la musique et des escape games. De plus, les activités sont animés dans la langue du pays de quoi apprendre de nouvelles expressions sans même s’en rendre compte ! </p>
        </div>
      </div>

      

      <!-- TEMOIGNAGES -->
      <h2>On vous raconte notre expérience</h2>
        
        <div class="temoignages_container">
          <div class="temoignage">
            <img src="img/tower_bridge2.jpg" class="tem_img" alt="">
            <div class="tem_candice tem_people"></div>
            <h3>Clara, 7 ans</h3>
            <p>“Je suis partie à Londres, c’est la première fois que je partais seule donc avant le départ j’étais un peu inquiète. Mais au final, ce fut une expérience géniale où je me suis fait pleins de nouveaux amis. De plus, les encadrants était vraiment gentils et j’ai adoré les activités de danse et théâtre en anglais qui m’ont fait beaucoup progresser. ”</p>
          </div>
  
          <div class="temoignage">
            <img src="img/malte 5.jpg" class="tem_img" alt="">
            <div class="tem_flo tem_people"></div>
            <h3>Jack, 13 ans</h3>
            <p>“Je suis parti à Malte pour une semaine pendant les vacances d’été. J’avais peur que les cours soit ennuyeux comme à l’école mais au contraire ce fut dans un cadre ludique que j’ai pu améliorer mon niveau d’anglais. De plus les activités nautiques étaient vraiment super et j’ai pu y faire de belles rencontres. Je recommande donc ce séjour ! ”</p>
          </div>

          <div class="temoignage">
            <img src="img/los angeles.png" class="tem_img" alt="">
            <div class="tem_oceane tem_people"></div>
            <h3>Océane, 17 ans</h3>
            <p>“ Grâce à Holilearn j’ai pu réaliser mon rêve. En effet, la ville de Los Angeles m’a toujours fasciné et pouvoir la découvrir fut un immense plaisir. D’autant plus que j’y ai rencontré des personnes incroyable. Mai surtout ne l oublions pas, j’ai pu améliorer mon niveau d’anglais ! ”</p></div>
        </div>
        
      </div>

    </main>

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
    <script src="caroussel.js"></script>
</body>
</html>