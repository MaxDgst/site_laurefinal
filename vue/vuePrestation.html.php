<div class="titre1">
    <h1>Mes prestations</h1>
</div>

<?php
for ($i = 0; $i < count($listePrestations); $i++) {

    $lesPhotosPrestations = getPhotosByPrestation($listePrestations[$i]['idPrestation']);
    $listePrestations = getPrestation($listePrestations[$i]['idPrestation']);
    ?>

    <div class="card">
        <div class="descrCard2"><?php echo "<a href='./?action=detail&prestation=" . $listePrestations[$i]['idPrestation'] . "'>" . '<div class="titreP">' . $listePrestations[$i]['nomPrestation'] . "</a></div>"; ?>
        </div>
        <div class="photoCard">
            <?php if (count($lesPhotosPrestations) > 0) { ?>
                <img height ="200px" width="200px"src="photos/<?php echo $lesPhotosPrestations[0]["cheminPPr"] ?>" alt="photo des prestations" />
            <?php } ?>
        </div>    
    </div>





    <?php
}
?>