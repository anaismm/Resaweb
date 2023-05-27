<?php
// on veut vider la variable $_SESSION pour que y ait plus rien dns le panier
    $_SESSION = array();

    if( ini_get( "session.use_cookies" ) ) { //on va voir si session.use_cookies a ete initialise, cad si la session utilise des cookies
        $params = session_get_cookie_params();
    
        // on remplace l'anicen cookie de session par un nouveau avec unde duree négative cad que le cookie sera supprimé
        setcookie(
          session_name()
          , ''
          , time() - 42000
          , $params[ "path"     ] // tout ca ce sont les parametres de l'ancien cookie
          , $params[ "domain"   ]
          , $params[ "secure"   ]
          , $params[ "httponly" ]
        );
    }
    
    // on supprime la session enregistrée en php
    if( session_status() === PHP_SESSION_ACTIVE ) { session_destroy(); }

    // On fait une redirection vers index
    header('Location: index.php');