<?php
include("connexion.php");
session_start(); //on initilaise une session utilisateur

if (isset($_GET["dest"])) {
    if (!isset($_SESSION["id_dest"])) {
        $_SESSION["id_dest"][] = $_GET["dest"]; // on ajoute notre id dest qui est notre parametre dans url dans une variable de session qui est un tableau et c'est si ca n'existe pas on ajoute quand meme
    }
    else if (!in_array($_GET["dest"], $_SESSION["id_dest"])) { // pour que ca n'ajoute pas la destination qui est déja presente si on refresh la page et on met un else if car on peut pas mettre de conditions a un else
        $_SESSION["id_dest"][] = $_GET["dest"];// on fait un tableau dans lequel on va ajouter l'id de la destination a chaque fois
    }
}

// die(implode(",", $_SESSION["id_dest"])); le implode sert a séparer les élements d'un tableau et les mettres dans une chianes d ecarcateres et ils seront séparé par un caractere, ici des virgules

if (isset($_SESSION["id_dest"])) {
    $requete="SELECT * FROM destination WHERE id IN (" . implode(",", $_SESSION["id_dest"]) . ")";
    $stmt=$db->query($requete);
    $result=$stmt-> fetchall(PDO::FETCH_ASSOC);
}
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
    <title>Formulaire</title>
</head>
<body>

    <?php include("navbar.php") ?>

    <h1 class="titre_panier">Mon Panier</h1>
    <section class="panier">
        

        <div class="produits_panier">
            <!-- <ul> -->
            <?php
                if(isset($result)):
                    foreach ($result as $dest):
            ?>
                        <div class="recap_dest_panier">
                            <div class="img_recap">
                                <div class="img_recap_card" style="background-image:url('<?=$dest["img_card"]?>')"></div> 
                            </div>

                            <div class="txt_recap_panier">
                                <h2 class="titre2_recap"><?= $dest["nom_parcours"] ?></h2>
                                <div class="pays_dest">
                                    <h2 class="titre2_recap"><?= $dest["pays"] ?></h2>
                                    <img src="<?= $dest["drapeau_pays"] ?>" alt="">
                                </div>
                                <h2 class="titre2_recap date_panier"><?= $dest["periode"] ?></h2>
                                <h2 class="titre2_recap prix_panier"><?= $dest["prix"] ?> € </h2>
                                <!-- pour le prix c'est pas comme ca ca va etre une varibale que j'aurais créer en php pour faire calcul sur le prix -->
                            </div>

                        </div>
            <?php
                    endforeach;
                endif;
            ?>
            
            <a href="abort.php" class="suppr_panier" >Vider le panier</a>
           
            
            <!-- </ul> -->
        </div>

        
        <div class="form_panier">
            <form action="confirmation.php" method="post"> <!-- transferer données en post cad qu'on els verra pas dans l'url -->
                <p>Tous les champs sont obligatoires <span>*</span></p> <br>
                <div class="nom_prenom">
                    <div class="nom">
                        <label for="nom">Nom <span>*</span> :</label>
                        <input type="text" id="nom" name="nom" required><br>
                    </div>

                    <div class="prenom">
                        <label for="prenom">Prénom <span>*</span> :</label>
                        <input type="text" id="prenom" name="prenom" required><br>
                    </div>
                </div>

                <label for="email">Email <span>*</span> :</label>
                <input type="email" id="email" name="email" required><br>

                <label for="telephone">Numéro de téléphone (ex. 0612345678) <span>*</span> :</label>
                <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required><br>

                <label for="nombre_voyageurs">Nombre de voyageurs (entre 1 et 5) <span>*</span> :</label>
                <div class="quantite_bouton">
                    <button class="quantite_moins quantite" type="button">-</button>
                    <input type="number" id="nombre_voyageurs" name="nombre_voyageurs" min="1" max="5" value="1" required>
                    <button class="quantite_plus quantite" type="button" >+</button> <br>
                </div>

                <div class="prix_total">
                    <p>Total : <span class="total_calcule"></span> €</p>
                </div>
                

                <div class="btn_envoyer_panier">
                    <input type="submit" class="btn-envoyer" value="Envoyer">
                </div>

                
            </form>
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
    <script src="prix.js"></script>

</body>
</html>