<?php
include_once "bd.utilisateur.inc.php";

function login($mailU, $mdpU, $pseudoU) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByMailU($mailU);
    $mdpBD = $util["mdpU"];
    $pseudoU = getPseudoUByMailU($mailU);

    if (trim($mdpBD) == trim(crypt($mdpU, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["mailU"] = $mailU;
        $_SESSION["mdpU"] = $mdpBD;
        $_SESSION["pseudoU"] = $pseudoU;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["mailU"]);
    unset($_SESSION["mdpU"]);
    unset($_SESSION["pseudoU"]);
}

function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["mailU"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function getPseudoULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["pseudoU"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["mailU"])) {
        $util = getUtilisateurByMailU($_SESSION["mailU"]);
        if ($util["mailU"] == $_SESSION["mailU"] && $util["mdpU"] == $_SESSION["mdpU"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}
?>