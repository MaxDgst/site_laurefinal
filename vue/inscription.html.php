<div class="formulaire">
    <h1>Inscription</h1>
    <span id="alerte"><strong><?= $msg ?></strong></span>
    <form action="./?action=inscription" method="POST">
    
        <input type="text" name="mailU" placeholder="Email de connexion" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Adresse mail invalide"/><br />
        <input type="password" name="mdpU" placeholder="Mot de passe" title="Au moins 8 caractères, un chiffre, une lettre majuscule et une minuscule, un caractère spécial" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" /> <br />
        <input onkeypress="verifierCaracteres(event); return false;" type="text" name="pseudoU" placeholder="Nom d'utilisateur" /><br />
        <input type="submit" value="S'inscrire" />
    
    </form>
</div>

<script  src="js/script.js"></script>