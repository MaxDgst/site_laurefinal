<div class="titre1">
    <h1>Liste des prestations</h1>
</div>

<?php
for ($i = 0; $i < count($listePrestations); $i++) {

    $lesPhotosPrestations = getPhotosByPrestation($listePrestations[$i]['idPrestation']);
    $listePrestations = getPrestation($listePrestations[$i]['idPrestation']);
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($lesPhotosPrestations) > 0) { ?>
                <img height ="200px" width="200px"src="photos/<?= $lesPhotosPrestations[0]["cheminPPr"] ?>" alt="photo des prestations" />
            <?php } ?>
        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&prestation=" . $listePrestations[$i]['idPrestation'] . "'>" . '<div class="titreP">' . $listePrestations[$i]['nomPrestation'] . "</a></div>"; ?>
            <div class="titreP">
                <?php echo $listePrestations[$i]['prixPrestation']; ?> 
            </div> 
            <div class="titreP">
                <?php echo $listePrestations[$i]['dureePrestation']; ?> 
            </div>
            <div class="presentationP">
                <?php echo $listePrestations[$i]['descPrestation']; ?>
            </div>
        </div>     
    </div>





    <?php
}
?>