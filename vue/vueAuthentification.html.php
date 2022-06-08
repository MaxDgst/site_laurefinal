    <div class="formulaire">
        <h1>Connexion</h1>
        <span id="alerte"><strong><?= $msg ?></strong></span>
        <form action="./?action=connexion" method="POST">

        <input type="text" name="mailU" placeholder="Email de connexion" /><br />
        <input type="password" name="mdpU" placeholder="Mot de passe"  /><br />
        <input type="submit" value="Se Connecter" />

    </form>
    <br />
    <h2>Si vous n'avez pas de compte veuillez vous inscrire <a href="./?action=inscription">ici</a></h2>
</div>