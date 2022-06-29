<div class="titre1">
    <h1>Mes Articles</h1>
</div>


<?php
for ($i = 0; $i < count($listeArticlesPdf); $i++) {

    $lesArticlesPdf = getArticlesPdf($listeArticlesPdf[$i]['idArticle']);
    $lesArticlesLien = getArticlesLien($listeArticlesLien[$i]['idArticle']);
    ?>

    <div class="article">
        <div class="pdf">
            <?php if (count($lesArticlesPdf) > 0) { ?>
                <?php echo $listeArticlesPdf[$i]['nomArticle']; ?> 
                <embed src="articles/<?php echo $lesArticlesPdf[0]["cheminArticle"] ?>" type='application/pdf' />
            <?php } ?>
        </div>
        <?php if (count($lesArticlesLien) > 0) { ?>
            <?php echo $listeArticlesLien[$i]['nomArticle']; ?> 
            <div class="lienP">
                <a href="<?php echo $listeArticlesLien[$i]['lienArticle'] ?>" ?>
            </div>
        <div class="lienP">
            <?php echo $listeArticlesLien[$i]['lienArticle']; ?>
        </a>     
        </div>
        <?php } ?>
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
