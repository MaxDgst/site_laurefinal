<div class="titre1">
    <h1>Avis des Familles</h1>
</div>

<h1>Votre avis a bien été enregistré</h1>
<?php
for ($i = 0; $i < count($listeAvis); $i++) {

    $lesAvis = getAvis($listeAvis[$i]['idAvis']);
    ?>

    <div class="bandeauAvis">
        <div class="note">
            <?php if (count($lesAvis) > 0) { ?>
                */10:<br/><?php echo $listeAvis[$i]['note']; ?> 
            <?php } ?>
        </div>
        <div class="Avis">
            <div class="pseudoAvis">
                <?php echo $listeAvis[$i]['pseudoU']; ?> 
            </div> 
            <div class="commentaireAvis">
                <?php echo $listeAvis[$i]['avis']; ?>
            </div>  
        </div>
    </div>





    <?php
}
?>