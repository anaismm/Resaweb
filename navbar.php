<nav class="">
<a href="#contenu" class="skip-link">Aller au contenu</a>
<a  class="logo" href="index.php"><img src="img/holilearnlogo_text.png" alt="Accueil"></a>

    <ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="all_dest.php">Destinations</a></li>
    <li><a href="about.php">À propos</a></li>
    <li><a href="panier.php">Panier
        <?php
            if (isset($_SESSION["id_dest"])) {
                echo " (" . count($_SESSION["id_dest"]) . ")";
            }
        ?>
    </a></li>
    </ul>  
</nav>