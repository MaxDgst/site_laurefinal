<?php

include_once "$racine/modele/bd.articlePodcast.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeArticlesPdf = getArticlesPdf();
$listeArticlesLien = getArticlesLien();
$listePodcast = getPodcast();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des Articles et Podcast";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueArticlePodcast.html.php";
include "$racine/vue/pied.html.php";


?>