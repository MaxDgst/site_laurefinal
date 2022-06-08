<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["accueilDefaut"] = "accueilPresentation.php";
    $lesActions["accueil"] = "accueilPresentation.php";
    $lesActions["accueil2"] = "accueilParcours.php";
    $lesActions["partenaires"] = "partenaires.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["listeP"] = "listePartenaires.php";
    $lesActions["articlePodcast"] = "listeArticlePodcast.php";
    $lesActions["contact"] = "contact.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["avis"] = "avisFamille.php";
    $lesActions["ajoutAvis"] = "ajoutAvis.php";
    $lesActions["deconnexion"] = "deconnexion.php";



    


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["accueilDefaut"];
    }
}

?>