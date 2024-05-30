<?php ?>

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
<body id="bodyApropos">
    <header>
		<nav>
			<a class="linksNav" href="index.php">Accueil</a>
			<a class="linksNav" href="projets.php">Projets</a>
			<a class="linksNav" href="apropos.php">A propos</a>
			<a class="linksNav" href="contact.php">Contact</a>
		</nav>
	</header>
	<main>
		<section id="presentation">
			<img id="photo" src="./asset/img/moi.jpg" alt="Photographie de moi">
			<div id="contenuPresentation">
				<h1 id="titrePresentation">Alexis Faby</h1>
				<p class="paragraphePresentation">Anciennement professionnel en animalerie pendant 7 ans, j'ai entrepris une transition vers l'informatique en démarrant un BTS en septembre 2023. Au cours de mes études, je me suis naturellement tourné vers le développement informatique.</p>
				<p class="paragraphePresentation">Je suis également un passioné d'hardware, j'aime fabriquer des ordinateurs de A à Z et être capable de réparer n'importe quel problème technique.</p>
				<p class="paragraphePresentation">Sur ce portfolio vous trouverez tous mes projets. Si mon profil vous intéresse, n'hésitez pas à téléchargé mon CV :</p>
				<button id="boutonCV">
					<a href="./asset/download/FABY_CV.pdf" download>Télécharger mon CV</a>
				</button>
			</div>
		</section>
		<section id="competences">
			<h2>J'ai des compétences en...</h2>
			<div id="logoCompBox">
				<img class="logoComp" src="./asset/img/htmlMonochrome.png" alt="Logo monochrome de HTML">
				<img class="logoComp" src="./asset/img/cssMonochrome.png" alt="Logo monochrome de CSS">
				<img class="logoComp" src="./asset/img/jsMonochrome.png" alt="Logo monochrome de javascript">
				<img class="logoComp" src="./asset/img/pythonMonochrome.png" alt="Logo monochrome de python">
			</div>
		</section>
		<section id="formations">
			<h2>Mes formations</h2>
			<div id="iluFormation">
				<div id="formation1">
					<p class="paraFormation">2023 à aujourd'hui</p>
					<p class="nomFormation">BTS Service Informatique aux Organisations</p>
					<p class="paraFormation">CCI Campus, Strasbourg</p>
				</div>
				<img id="iluFleche" src="./asset/img/Fleche.png" alt="Image d'une fleche regardant vers le haut">
				<div id="formation2">
					<p class="paraFormation">2014 - 2017</p>
					<p class="nomFormation">Bac professionnel Technicien Conseil Vente en Animalerie</p>
					<p class="paraFormation">Lycée du Pflixbourg, Wintzenheim</p>
				</div>
			</div>
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