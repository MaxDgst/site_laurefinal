<div class="titre1">
    <h1>Mes Articles</h1>
</div>


<?php
for ($i = 0; $i < count($listeArticle); $i++) {

    $lesArticle = getArticle($listeArticle[$i]['idArticle']);
    $lesLienArticle = getLienArticle($listeLienArticle[$i]['idArticle']);
    ?>

    <div class="article">
        <?php echo $listeArticle[$i]['nomArticle']; ?> 
        <div class="pdf">
            <?php if (count($lesArticle) > 0) { ?>
                <embed src="articles/<?= $lesArticle[0]["cheminArticle"] ?>" type='application/pdf' />
            <?php } ?>
        </div>
        <?php if (count($lesLienArticle) > 0) { ?>
            <div class="lienP">
                <a href="<?=$listeLienArticle[$i]['lienArticle'] ?>" ?>
                <?php } ?>
            </div>
        <div class="lienP">
            <?php echo $listeLienArticle[$i]['lienArticle']; ?>
        </a>     
        </div>
    </div>
    
    
    <?php
}
?>
<div class="titre1">
    <h1>Mes podcasts</h1>
</div>

<?php
for ($i = 0; $i < count($listePodcast); $i++) {

    $lesPodcast = getPodcast($listePodcast[$i]['idPodcast']);
    ?>

    <div class="card">
        <?php if (count($lesPodcast) > 0) { ?>
            <div class="lienP">
                <a href="<?=$listePodcast[$i]['cheminPodcast'] ?>" ?>
                <?php } ?>
            </div>
        <div class="lienP">
            <?php echo $listePodcast[$i]['cheminPodcast']; ?>
        </a> 
        </div>
    </div>
    
    
    <?php
}
?>
