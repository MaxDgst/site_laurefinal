<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laure Daussy Coach parental</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
  <style type="text/css">
    @import url("css/style.css");
  </style>
<body>
  <section id="sectionMenu">
      <nav class="navbar dark-mode" role="navigation">
        <div class="navbar__logo"><a href="./?action=accueilDefaut"><img src="image/logotest.png" height="200px"></a><h1>Laure Daussy <br> coach parental</h1></div>   
          <ul class="navbar__links">
            <li class="navbar__link first"><a href="./?action=prestation">Prestations</a></li>
            <li class="navbar__link second"><a href="./?action=avis">Avis Familles</a></li>
            <li class="navbar__link third"><a href="./?action=contact">Contact</a></li>
            <li class="navbar__link four"><a href="./?action=articlePodcast">Mes articles et podcasts</a></li>
            <li class="navbar__link fifth"><a href="./?action=listeP">Partenaires</a></li>
            <?php include_once "$racine/modele/authentification.inc.php"; ?>
            <?php if(isLoggedOn()){ ?>
              <li class="navbar__link fifth"><a href="./?action=profil">Mon Profil</a></li>
            <?php } 
                else{ ?>
            <li class="navbar__link fifth"><a href="./?action=connexion">Se connecter</a></li>
            <?php } ?>
          </ul>
        <button class="burger">
          <span class="bar"></span>  
        </button>   
        </nav>

<!-- partial -->
  <script  src="js/script.js"></script>

  <div class="corps">
