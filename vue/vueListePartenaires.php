<div class="titre1">
    <h1>Mes partenaires</h1>
</div>


<?php
for ($i = 0; $i < count($listePartenaires); $i++) {

    $lesPhotosP = getPhotosByIdPartenaire($listePartenaires[$i]['idPartenaire']);
    ?>

    <div class="card">
        <div class="descrCard">
            <div class="titreP">
                <?php echo $listePartenaires[$i]['nomPartenaire']; ?> 
            </div> 
            <div class="presentationP">
                <?php echo $listePartenaires[$i]['descPartenaire']; ?>
            </div>
            <div class="lienP">
                <?php {  ?>
                    <a href="<?php echo $listePartenaires[$i]['lienPartenaire'] ?>">
                <?php } ?>
                <?php echo $listePartenaires[$i]['lienPartenaire']; ?>
                </a>
            </div>
        </div> 
        <div class="photoCard">
                <?php if (count($lesPhotosP) > 0) { ?>
                <img height ="200px" width="200px"src="photos/<?php echo $lesPhotosP[0]["cheminPP"] ?>" alt="photo des partenaires" />
                <?php } ?>
        </div>    
    </div>





    <?php
}
?>