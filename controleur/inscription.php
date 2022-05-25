<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";


$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mailU"]) && isset($_POST["mdpU"]) && isset($_POST["pseudoU"])) {

    if ($_POST["mailU"] != "" && $_POST["mdpU"] != "" && $_POST["pseudoU"] != "") {
        $mailU = $_POST["mailU"];
        $mdpU = $_POST["mdpU"];
        $pseudoU = $_POST["pseudoU"];

        // enregistrement des donnees
        $ret = addUtilisateur($mailU, $mdpU, $pseudoU);
        if ($ret) {
            $inscrit = true;
        } else {
            $msg = "l'utilisateur n'a pas été enregistré.";
        }
    }
 else {
    $msg="Renseigner tous les champs...";    
    }

    $mailU = $_POST["mailU"];
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE email=$mailU");
    $stmt->execute([$mailU]); 
    $utilisateur = $stmt->fetch();
    if ($utilisateur) {
        echo "adresse mail déjà utilisée";
    } else {
        $ret;
    } 
}

if ($inscrit) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription confirmée";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueConfirmationInscription.php";
    include "$racine/vue/pied.html.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription pb";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/inscription.html.php";
    include "$racine/vue/pied.html.php";
}
?>