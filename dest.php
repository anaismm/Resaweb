<?php
include("connexion.php");
session_start();

if(isset($_GET["dest"])){
    $dest = $_GET["dest"];
}
else{
    $dest = "1";
}

$requete="SELECT * FROM destination WHERE id=$dest";
$stmt=$db->query($requete);
$result=$stmt-> fetchall(PDO::FETCH_ASSOC);

// die($result[0]["prix"]);

// die($dest);  die c'est pour faire débeugage, il n'affiche pas la suite mais que ce qu'il y a dans le die

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/holilearn_logo.png">
    <link rel="stylesheet" href="style_dest.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;900&display=swap" rel="stylesheet">
    <title>Holilearn Parcours LA</title>
</head>

<body>

    <?php include("navbar.php") ?>

    <h1><?=$result[0]["nom_parcours"]?></h1>
    <div class="dest_container">
        <div class="img_container">
            <div class="grd_img grande"style="background-image:url('<?=$result[0]["image1"]?>')"></div>
        
            <div class="petite_img_dest_container">
                <div class="petite p2" style="background-image:url('<?=$result[0]["image2"]?>')"></div>
                <div class="petite" style="background-image:url('<?=$result[0]["image3"]?>')"></div>
                <div class="petite" style="background-image:url('<?=$result[0]["image4"]?>')"></div>
            </div>
        </div>

        <div class="txt_container">
            <div class="pays_dest">
                <h3><?=$result[0]["pays"]?></h3>
                <img src="<?=$result[0]["drapeau_pays"]?>" alt="">
            </div>
            <h3><?=$result[0]["age_dest"]?> </h3>
            <h3><?=$result[0]["periode"]?></h3>
            <p class="descriptif_dest"><?=$result[0]["descriptif_dest"]?></p>
            <div class="prix_dest">
                <p><?=$result[0]["prix"]?> €</p>
            </div>
            <div class="btn_resa">
                <a href="panier.php?dest=<?=$result[0]["id"]?>" class="btn_dest">Ajouter au panier</a>
            </div>
            
        </div>
    </div>

    <div class="hebergement_et_cours">
        <div class="categorie">
            <div class="logo_text">
                <img src="img/home.png" alt="">
                <h2>Hébergement</h2>
            </div>
            
            <ul>
                <li>Vous serez logé dans <?=$result[0]["lieu_hebergement"]?></li>
                <li>Vous disposerez de chambres confortables allant de 1 à 4 lits</li>
                <li>Il vous sera possible de séjourner avec un ami</li>
                <li>Le campus dispose de nombreuses infrastructures et installations modernes (espace vert, piscine, gymnase)</li>
                <li>Vous disposerez d’une pension complète avec repas chauds le midi et le soir (les jours d’excursion, des paniers repas seront fournis)</li>
            </ul>
        </div>
        
        <div class="categorie">
            <div class="logo_text">
                <img src="img/cours.png" alt="">
                <h2>Cours</h2>
            </div>
            <ul>
                <li>Vous disposerez de  3 heures de cours par jour le matin</li>
                <li>Vous serez réparti en groupe de 15 élèves de différentes nationalités constitués suite à un test de niveau réalisé en début de séjour</li>
                <li>Un grand travail sur l’expression orale sera fait à travers des cours interactifs afin de développer la confiance en soi</li>
                <li>Des travaux pratiques, revues de presse, discussions ou encore jeux de rôle seront proposés afin de vous faire pratiquer l’anglais d’une toute autre manière</li>
                <li>Enfin, les cours sont dispensés par des professeurs américains diplômés</li>
            </ul>
        </div>
    </div>

    <div class="activites">
        <div class="logo_text">
            <img src="img/activités2.png" alt="">
            <h2>Activités et loisirs</h2>
        </div>
        <p class="txt">En choisissant ce parcours vous pourrez profiter de 6 après-midi de loisirs par semaine animées en anglais. <br>
        Pour vous donner un aperçu, voici quelques exemples d’activités, visites et soirées dont vous pourrez profiter: </p>

        <div class="liste_activites">
            <div class="bloc_ex">
                <img src="img/activite6.png" alt="">
                <h3>Activités</h3>
                <p><?=$result[0]["activites"]?></p>
            </div>
            <div class="bloc_ex">
                <img src="img/visite2.png" alt="">
                <h3>Visites</h3>
                <p><?=$result[0]["visites"]?></p>
            </div>
            <div class="bloc_ex">
                <img src="img/soiree2.png" alt="">
                <h3>Soirées</h3>
                <p><?=$result[0]["soirees"]?></p>
            </div>
        </div>

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
    

        <script src="script2.js"></script>
</body>
</html>