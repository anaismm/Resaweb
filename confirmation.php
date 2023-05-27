<?php
include("connexion.php");
session_start();

function generer_code_resa($length = 5) {
    $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $code_resa = '';
    $max = strlen($char) - 1;
    for ($i = 0; $i < $length; $i++) {
        $code_resa .= $char[mt_rand(0, $max)];
    }
    return $code_resa;
}

$result = 1;

while ($result != 0) {
    $code_resa = generer_code_resa();
    $stmt = $db->prepare("SELECT COUNT(*) FROM reservation WHERE code_resa = :code_resa");
    $stmt->bindParam(':code_resa', $code_resa);
    $stmt->execute();
    $result = $stmt->fetchColumn();
}

// echo var_dump($_POST);
// echo var_dump($_SESSION);
// echo $code_resa;

// die(implode(",", $_POST));
$infos_post = implode("','", $_POST);

// Données ajouter a ma table reservation 
$requete="INSERT INTO reservation (nb_voyageurs, mail, nom, prenom, tel, code_resa)
VALUES ('$infos_post', '$code_resa')"; // les valeurs nb_voyauers etc sont celles presentes dans ma base de donne et non celle du formulaire + attention de ne pas oublier les guillemets que j'ai rajouté dans mon implode car les valeurs values doivent etre entouré de guillemets
$stmt=$db->query($requete); //execute la requete 
$idGenere = $db->lastInsertId(); // lastInsertId permet de recuperer le dernier id genere dans ma ttbale reservation pour ensuite l'inserer dans ma table rel_resa_dest

$infos_session = "";

foreach ($_SESSION["id_dest"] as $dest) {
    $infos_session .= "($idGenere, $dest),";
}

$infos_session = substr($infos_session, 0, -1) . ";";

// Données ajouter a ma table rel_resa_dest
$requete="INSERT INTO rel_resa_dest (id_reservation, id_destination)
VALUES $infos_session";
$stmt=$db->query($requete);

$message = "Bonjour {$_SESSION["prenom"]} {$_SESSION["nom"]},<br>votre réservation $code_resa est confirmée.";

$headers = 'From: noreply@resaweb.michel.butmmi.o2switch.site' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail(
    $mail,
    "Confirmation de votre réservation",
    $message,
    $headers
);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation</title>
</head>
<body>

    <?php include("navbar.php") ?>
    <h1>Votre réservation a bien été enregsitré.</h1>
    <h2>Vous recevrez un mail confirmant votre réservation</h2>

    
    
</body>
</html>