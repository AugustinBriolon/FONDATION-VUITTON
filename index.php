<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Fondation Louis Vuitton</title>
		<link rel="stylesheet" href="./style/index.css">
		<link rel="icon" type="image/x-icon" href="img/LogoFVL.png"/><link rel="shortcut icon" type="image/x-icon" href="img/LogoFVL.png" />
	</head>
	<header>
		<img src="img/LogoFVL.png" class="LogoMiniFLV" alt="Image Logo FLV">
		<!-- icône menu -->
		<img src="img/burger.svg" class="icone-menu" alt="Icone Menu"/>
		<!-- menu -->
		<ul class="menu">
			<!-- icône fermer -->
			<img src="img/croix.svg" class="icone-fermer" alt="Icone Croix"/>
			<li><a href="index.php" class="menu__item">Home</a></li>
			<li><a href="pages/histoire.php" class="menu__item">History</a></li>
			<li><a href="pages/galerie.php" class="menu__item">Gallery</a></li>
			<li><a href="pages/blog.php" class="menu__item">Animation</a></li>
			<li><a href="pages/contact.php" class="menu__item">Contact</a></li>
			<li><a href="pages/seConnecter.php" class="menu__item">Se Connecter</a></li>
	
		</ul>
	</header>
	<body class="bodyIndex">
        <h1 class="BFLV"></h1>
		<?php
		include ('../pages/footer.php');
		?>
		<!--ajout de JS ici -->
		<script src="script/typed.min.js"></script>
		<script src="header/header.js"></script>
		
	</body>
</html>
