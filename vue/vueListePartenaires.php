<div class="titre1">
    <h1>Liste des partenaires</h1>
</div>


<?php
for ($i = 0; $i < count($listePartenaires); $i++) {

    $lesPhotosP = getPhotosByIdPartenaire($listePartenaires[$i]['idPartenaire']);
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($lesPhotosP) > 0) { ?>
                <img height ="200px" width="200px"src="/var/www/html/photos/<?= $lesPhotosP[0]["cheminPP"] ?>" alt="photo des partenaires" />
            <?php } ?>
        </div>
        <div class="descrCard">
            <div class="titreP">
                <?php echo $listePartenaires[$i]['nomPartenaire']; ?> 
            </div> 
            <div class="presentationP">
                <?php echo $listePartenaires[$i]['descPartenaire']; ?>
            </div>
            <div class="lienP">
                <?php echo $listePartenaires[$i]['lienPartenaire']; ?>
            </div>     
        </div>
    </div>





    <?php
}
?>