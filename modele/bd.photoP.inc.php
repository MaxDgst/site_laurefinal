<?php

include_once "bd.inc.php";

function getPhotosByIdPartenaire($idPartenaire) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from PhotoP where idPartenaire=:idPartenaire");
        $req->bindValue(':idPartenaire', $idPartenaire, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPhotosByIdPP($idPP) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from PhotoP where idPP=:idPP");
        $req->bindValue(':idPP', $idPP, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addPhoto($idPP, $cheminPP, $idPartenaire) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into PhotoP (idPP, cheminPP, idPartenaire) values(:idPP,:cheminPP,:idPartenaire)");
        $req->bindValue(':idPP', $idPP, PDO::PARAM_INT);
        $req->bindValue(':cheminPP', $cheminPP, PDO::PARAM_STR);
        $req->bindValue(':idPartenaire', $idPartenaire, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>