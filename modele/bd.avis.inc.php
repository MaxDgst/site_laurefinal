<?php
include_once "bd.inc.php";

function getAvis() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Critiques");
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

function addAvis($note, $avis, $pseudoU) {
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into Critiques (note, avis, pseudoU) values(:note,:avis,:pseudoU)");
        $req->bindValue(':note', $note, PDO::PARAM_STR);
        $req->bindValue(':avis', $avis, PDO::PARAM_STR);
        $req->bindValue(':pseudoU', $pseudoU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>

