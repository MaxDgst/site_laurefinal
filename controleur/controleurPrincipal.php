<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["accueilDefaut"] = "accueilPresentation.php";
    $lesActions["accueil"] = "accueilPresentation.php";
    $lesActions["partenaires"] = "partenaires.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["listeP"] = "listePartenaires.php";



    


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["accueilDefaut"];
    }
}

?>