<?php
include_once "$racine/modele/bd.avis.inc.php";
include_once "$racine/modele/authentification.inc.php";

$publier = false;
if (isset($_POST["note"]) && isset($_POST["avis"])) {

    if ($_POST["note"] != "" && $_POST["avis"] != "") {
        $note = $_POST["note"];
        $avis = $_POST["avis"];
        $pseudoU = getPseudoULoggedOn();

        // enregistrement des donnees
        $ret = addAvis($note, $avis, $pseudoU);
        if ($ret) {
            $publier = true;
        } else {
            $msg = "Le commentaire n'a pas été publié";
        }
    }
 else {
    $msg="Renseigner tous les champs...";    
    }
}

$titre = "Liste des partenaires répertoriés";

if ($publier) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Commentaire publié";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueConfirmationAvis.php";
    include "$racine/vue/pied.html.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Publication pb";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAjoutAvis.html.php";
    include "$racine/vue/pied.html.php";
}

?>