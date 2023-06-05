<?php
include("connexion.php");
session_start();

// impossible d'acceder a la page confirmation si la personne n'a rien dans son panier et soumet le formulaire
if (!isset($_SESSION["id_dest"])) {
    if (empty($_SESSION["id_dest"])) { // on fait test empty car variable peut exister mais etre vide
        header('Location: panier.php'); // redirection vers panier 
        exit(); // arrete execution de php
    }
}

// pour tester si on récupère bien au moins l'email de l'utilisateur en post et sinon on redirige vers le panier
if (!isset($_POST["email"])) {
    if (empty($_POST["email"])) {
        header('Location: panier.php');
        exit();
    }
}

function generer_code_resa($length = 5) {
    $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $code_resa = '';
    $max = strlen($char) - 1;
    for ($i = 0; $i < $length; $i++) {
        $code_resa .= $char[mt_rand(0, $max)];
    }
    return $code_resa;
}


// on s'assure que le code resa n'ets pas déjà dans la base de donnée c'ets pk on initialise et qu'on dit qu'il existe au moins une fois et le while pourra démarrer. Il s'arretera jsuqu'a ce qu'il trouve un code qui n'xiste pas dans la BDD
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

$requete="INSERT INTO reservation (nom, prenom, mail, tel, nb_voyageurs, code_resa)
VALUES ('$infos_post', '$code_resa')"; // les valeurs nb_voyaguers etc sont celles presentes dans ma base de donne et non celle du formulaire + attention de ne pas oublier les guillemets que j'ai rajouté dans mon implode car les valeurs values doivent etre entouré de guillemets
$stmt=$db->query($requete); //execute la requete 
$idGenere = $db->lastInsertId(); // lastInsertId permet de recuperer le dernier id genere en autoincrement dans ma tbale reservation pour ensuite l'inserer dans ma table rel_resa_dest



$infos_session = "";

foreach ($_SESSION["id_dest"] as $dest) {
    $infos_session .= "($idGenere, $dest),";
}

$infos_session = substr($infos_session, 0, -1) . ";"; // notre derniere virgule nous derange, ce code sert donc a remplacer la dernière virgule par un point virgule


// Données ajouter a ma table rel_resa_dest
$requete="INSERT INTO rel_resa_dest (id_reservation, id_destination)
VALUES $infos_session";
$stmt=$db->query($requete); // pour executer notre requete


////////////CALCUL DU PRIX/////////////
        $total = 0;

        $requete="SELECT dest.prix, resa.nb_voyageurs FROM destination dest, reservation resa, rel_resa_dest rel
        WHERE dest.id=rel.id_destination AND resa.id=rel.id_reservation AND resa.id=$idGenere";
        $stmt = $db->query($requete);
        $result = $stmt-> fetchall(PDO::FETCH_ASSOC);

        foreach ($result as $dest) {
            $total += $dest["prix"] * $dest["nb_voyageurs"];
        }
    
/////////////////////////




////////////RECUPERER NOM DES VOYAGES/////////////
$nom_dest="";

$requete="SELECT dest.nom_parcours FROM destination dest, reservation resa, rel_resa_dest rel
WHERE dest.id=rel.id_destination AND resa.id=rel.id_reservation AND resa.id=$idGenere";
$stmt = $db->query($requete);
$result = $stmt-> fetchall(PDO::FETCH_ASSOC);

foreach ($result as $dest) {
    $nom_dest.=$dest["nom_parcours"]." "."et"." ";
} 
$name_dest = substr($nom_dest, 0, -4);

// echo ($name_dest);





// MAIL POUR LE CLIENT
$message = "<html>
    <head>
    <title>Confirmation de réservation</title>
    </head>
    <body>
    <p>Bonjour {$_POST["prenom"]} {$_POST["nom"]},</p>
    <p>Votre réservation de {$total} € pour le {$name_dest} a bien été enregsitrée.</p>
    <p>Voici votre code de réservation : $code_resa.</p>
    </body>
    </html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers = 'Content-Type: text/html; charset=UTF-8' . "\r\n" . 'From: noreply@resaweb.michel.butmmi.o2switch.site' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

$mail_sent = mail($_POST["email"],  "Confirmation de votre réservation", $message, $headers);


// MAIL POUR LE GESTIONNAIRE
$to = "anais.michel@edu.univ-eiffel.fr";
$subject = "Nouvelle réservation effectuée";
$message_gest = "<html>
<head>
<title> Nouvelle réservation effectuée </title>
</head>
<body>
<p>Une réservation de {$total} € pour le {$name_dest} a été effectuée au nom de {$_POST["prenom"]} {$_POST["nom"]}</p>
</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers = 'Content-Type: text/html; charset=UTF-8' . "\r\n" . 'From: noreply@resaweb.michel.butmmi.o2switch.site' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

$mail_gest = mail($to,$subject,$message_gest,$headers);



// On ajoute pas deux fois la reservation dans la BDD, ce code permet de suprrimer la session
$_SESSION = array();

    if( ini_get( "session.use_cookies" ) ) { 
        $params = session_get_cookie_params();
    
        setcookie(
          session_name()
          , ''
          , time() - 42000
          , $params[ "path"     ]
          , $params[ "domain"   ]
          , $params[ "secure"   ]
          , $params[ "httponly" ]
        );
    }
    
    if( session_status() === PHP_SESSION_ACTIVE ) { session_destroy(); }
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
    <title>Confirmation</title>
</head>
<body>

    <?php include("navbar.php") ?>

    <div class="bouton_retour">
        <a href="index.php" class=btn_retour_accueil>Retour à l'accueil</a>
    </div>
    
    <!-- Envoi de l'e-mail  -->
    <?php

    if ($mail_sent) {
        echo " <h1 class=\"titre_confirm\">Votre réservation a bien été enregistrée ! <br>
        Un mail de confirmation vient de vous être envoyé !</h1> 
        
        <div class=\"video_validation\">
            <video autoplay muted>
                <source src=\"avion.mp4\" type=\"video/mp4\">
            </video>
        </div>";

    } else {
        echo "<h1 class=\"titre_confirm\">Une erreur s'est produite lors de l'envoi de l'e-mail </h1> 
        
        <div class=\"video_validation\">
            <video autoplay muted>
                <source src=\"avion.mp4\" type=\"video/mp4\">
            </video>
        </div>";
    }
    ?>



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