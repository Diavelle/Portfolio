<?php

include "phpObject/projet.php";

$projetPortfolio = new Projet();
$projetPortfolio->setTitle('Portfolio');
$projetPortfolio->setDescription('Réalisation de mon portfolio en HTML et CSS');
$projetPortfolio->setImg('asset/img/img_portfolio_petit.jpg');
$projetPortfolio->setLink('projets/portfolio.php');

$projetSportAddict = new Projet();
$projetSportAddict->setTitle('Sport Addict');
$projetSportAddict->setDescription('Réalisation d\'un site vitrine avec HTML, CSS et javascript');
$projetSportAddict->setImg('asset/img/sport_addict.jpg');
$projetSportAddict->setLink('projets/sportaddict.php');

$projetHorloge = new Projet();
$projetHorloge->setTitle('Horloge JS');
$projetHorloge->setDescription('Réalisation d\'un horloge avec HTML, CSS et javascript');
$projetHorloge->setImg('asset/img/horloge.jpg');
$projetHorloge->setLink('projets/horloge.php');

$projetRor = new Projet();
$projetRor->setTitle('Risk of Rain');
$projetRor->setDescription('Réalisation d\'un site wiki pour le jeu Risk of Rain 2');
$projetRor->setImg('asset/img/rorWallpaper.jpg');
$projetRor->setLink('projets/riskofrain.php');

$projetFutur = new Projet();
$projetFutur->setTitle('Futur projet');
$projetFutur->setImg('asset/img/inconnu.jpg');
$projetFutur->setLink('#');

$tableProjets = array($projetPortfolio, $projetSportAddict, $projetHorloge, $projetRor, $projetFutur);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio FABY Alexis</title>
	<link rel="stylesheet" href="asset/css/style.css">
	<link rel="shortcut icon" href="asset/img/Logo_simple_Alexis-22.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.typekit.net/aco5fhy.css">
</head>
    <body id="bodyProjets">
        <header>
            <nav>
                <a class="linksNav" href="index.php">Accueil</a>
                <a class="linksNav" href="projets.php">Projets</a>
                <a class="linksNav" href="apropos.php">A propos</a>
                <a class="linksNav" href="contact.php">Contact</a>
            </nav>
        </header>
        <main id="mainProjets">
            <h1>Mes projets</h1>
            <section id="projets">
                <?php
                foreach ( $tableProjets as $key => $projet ) {
                    ?>
                    <a href="<?php echo $projet->printLink(); ?>" class="itemProjets" style="background-position: center; background-size: cover; background-image: url('<?php echo $projet->printImg(); ?>');" >
                        <div class="contenuProjets">
                            <h2 class="titreProjets">
                                <?php echo $projet->printTitre(); ?>
                            </h2>
                            <p class="descriptionProjets">
                                <?php echo $projet->printDescription(); ?>
                            </p>
                            <div class="flecheProjets"></div>
                        </div>
                    </a>
                <?php
                }
                ?>
            </section>
            <div id="arrowUp">
                <a href="#">
                    <img id="icoFlecheUp" src="./asset/img/arrowUp2.png" alt="Icone d'une fleche regardant vers le haut">
                </a>
            </div>
        </main>
        <footer>
			<span id="titreFooter">© Alexis Faby 2023 - 2024</span>
			<div id="linksFooterBox">
				<a class="linksFooter" href="mentions.php">Mentions légales |</a>
				<a class="linksFooter" href="confidentialite.php">Politique de confidentialité</a>
			</div>
		</footer>
    </body>
</html>

