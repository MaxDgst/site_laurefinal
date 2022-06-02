<?php
include_once "$racine/modele/authentification.inc.php";

logout();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";
include "$racine/vue/entete.html.php";
include "$racine/vue/authentification.html";
include "$racine/vue/pied.html.php";


?>