<?php if(isLoggedOn()){ ?>
    <div class="formulaire">
    <h1>Laissez moi votre avis</h1>
    <form action="./?action=ajoutAvis" method="POST">
    
        <input type="number" name="note" placeholder="Note/10" /><br />
        <textarea name="avis" placeholder="Commentaire" required></textarea><br />
    
        <input type="submit" value="Publier mon commentaire" />
    
    </form>
    </div>
    <?php } 
        else{ ?>
        <div class="goCon">
            <h2>Veuillez vous <a href="./?action=connexion">connecter</a> pour laisser un commentaire<h2>
        </div>
    <?php } ?>