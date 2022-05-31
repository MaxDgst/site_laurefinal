<?php
//isset=si message a été rempli
if (isset($_POST["message"])) {
    $message = "Ce message vous a été envoyé via la page contact de votre site
    Nom : " . $_POST["nom"] . "
    Email : " . $_POST["email"] . "
    Message : " . $_POST["message"];
 $retour = mail("maxime.dgstpro@gmail.com", $_POST["sujet"], $message, "From:contact@monsite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
 if ($retour) {
    echo"<p>L'email a bien été envoyé.</p>";
 }
}
?>