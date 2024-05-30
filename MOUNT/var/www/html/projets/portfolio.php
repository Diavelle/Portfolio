<?php

include "../phpObject/projet.php";

$projetSportAddict = new Projet();
$projetSportAddict->setTitle('Sport Addict');
$projetSportAddict->setDescription('Réalisation d\'un site vitrine avec HTML, CSS et javascript');
$projetSportAddict->setImg('../asset/img/sport_addict.jpg');
$projetSportAddict->setLink('../projets/sportaddict.php');

$projetHorloge = new Projet();
$projetHorloge->setTitle('Horloge JS');
$projetHorloge->setDescription('Réalisation d\'un horloge avec HTML, CSS et javascript');
$projetHorloge->setImg('../asset/img/horloge.jpg');
$projetHorloge->setLink('../projets/horloge.php');

$projetRor = new Projet();
$projetRor->setTitle('Risk of Rain');
$projetRor->setDescription('Réalisation d\'un site wiki pour le jeu Risk of Rain 2');
$projetRor->setImg('../asset/img/rorWallpaper.jpg');
$projetRor->setLink('../projets/riskofrain.php');

$tableProjets = array($projetSportAddict, $projetHorloge, $projetRor);

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portfolio FABY Alexis</title>
		<link rel="stylesheet" href="../asset/css/style.css">
		<link rel="shortcut icon" href="../asset/img/Logo_simple_Alexis-22.png" type="image/x-icon">
		<link rel="stylesheet" href="https://use.typekit.net/aco5fhy.css">
	</head>
    <body id="bodyDetails">
        <header>
            <nav>
                <a class="linksNav" href="../index.php">Accueil</a>
                <a class="linksNav" href="../projets.php">Projets</a>
                <a class="linksNav" href="../apropos.php">A propos</a>
                <a class="linksNav" href="../contact.php">Contact</a>
            </nav>
        </header>
        <main>
            <section id="enteteDetails">
                <h1 id="titreDetails">Portfolio</h1>
                <p class="descriptionPageDetail" id="descriptionDetail">Mon projet portfolio est une vitrine numérique de mes compétences, de mes expériences et de mes réalisations dans le domaine de l'informatique.</p>
            </section>
            <article id="imgBox">
                <img id="imgProjet" src="../asset/img/portfolioIndex.png" alt="">
            </article>
            <section id="outils">
                <h2 class="h2autreProjets">Outils</h2>
                <div id="boxLogoOutils">
                    <img class="logoOutils" src="../asset/img/html5.png" alt="Icone HTML">
                    <img class="logoOutils" src="../asset/img/css3.png" alt="Icone CSS">
                    <img class="logoOutils" src="../asset/img/js.png" alt="Icone javascript">
                    <img class="logoOutils" src="../asset/img/vsc.png" alt="Icone de visual studio code">
                </div>
                <p class="descriptionPageDetail" id="descriptionOutils">Pour ce projet, j'ai utilisé HTML pour la structure du site, CSS pour gérer le style et enfin Visual Studio Code comme environnement de développement.</p>
            </section>
            <section id="autreProjets">
                <h2 class="h2autreProjets">Mes autres projets</h2>
                <div id="boxAutreProjets">
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
                </div>
            </section>
            <div id="arrowUp">
                <a href="#">
                    <img id="icoFlecheUp" src="../asset/img/arrowUp2.png" alt="Icone d'une fleche regardant vers le haut">
                </a>
            </div>
        </main>
        <footer>
			<span id="titreFooter">© Alexis Faby 2023 - 2024</span>
			<div id="linksFooterBox">
				<a class="linksFooter" href="../mentions.html">Mentions légales |</a>
				<a class="linksFooter" href="../confidentialite.html">Politique de confidentialité</a>
			</div>
		</footer>
    </body>
</html>

