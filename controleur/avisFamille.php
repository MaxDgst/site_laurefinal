<?php

include_once "$racine/modele/bd.avis.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeAvis = getAvis();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des partenaires répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeAvis.html.php";
include "$racine/vue/pied.html.php";


?>