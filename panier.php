<?php
include("connexion.php");
session_start(); //on initilaise une session utilisateur

if (isset($_GET["dest"])) {
    if (!isset($_SESSION["id_dest"])) {
        $_SESSION["id_dest"][] = $_GET["dest"];
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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Formulaire</title>
</head>
<body>

    <?php include("navbar.php") ?>

    <ul>
    <?php
        if(isset($result)){
            foreach ($result as $dest) {
    ?>
                <li><?= $dest["nom_parcours"] ?></li>
    <?php
            }
        }
    ?>
    </ul>
    <form action="confirmation.php" method="post">
        <label for="nombre_voyageurs">Nombre de voyageurs (entre 1 et 5) :</label>
        <input type="number" id="nombre_voyageurs" name="nombre_voyageurs" min="1" max="5" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="telephone">Numéro de téléphone (ex. 0612345678) :</label>
        <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required><br>

        <input type="submit" value="Envoyer">
    </form>

    <a href="abort.php">Vider le panier</a>
</body>
</html>