<?php
include_once "getRacine.php";
include_once "$racine/controleur/controleurPrincipal.php";
/*include_once "$racine/modele/authentification.inc.php";  pour pouvoir utiliser isLoggedOn() */

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "accueilDefaut";
}

$fichier = controleurPrincipal($action);
include_once "$racine/controleur/$fichier";
?>
     