<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Fondation Louis Vuitton</title>
		<link rel="stylesheet" href="../style/index.css">
		<link rel="icon" type="image/x-icon" href="img/LogoFVL.png"/><link rel="shortcut icon" type="image/x-icon" href="img/LogoFVL.png" />

	</head>
	<header class="mainHeader">
		<img src="../img/Logo Grand FLV.png" class="LogoFLVContact" alt="Image Logo FLV">
	</header>
	<body id="bodyContact">
		<!-- Titre et indication -->
		<h1 id="titreContact">Contact</h1>
		<p id="sousTitre">
			Fill out the form to create an account.
		</p>
		<?php
			include ('./menu.php');
        ?>
		<!-- formulaire et message de validation -->
		<div class="formulaire">
            <p class="zone-message1"></p>
			<label>Last name and first name</label>
			<input type="text" placeholder="(3 caractères min.)" class="nom" />
			<p class="zone-message2"></p>
            <label>Age</label>
			<input type="number" placeholder="Your age" class="age" />
			<p class="zone-message3"></p>
            <label>Mail address</label>
			<input type="email" placeholder="Your mail adress" class="email" />
			<p class="zone-message4"></p>
            <label>Your text</label>
			<textarea placeholder="Your text here" class="texte"></textarea>
			<div class="specialBoutton">
				<button id="bouton_validation">Send</button>
			</div>
		</div>
		<ul class="medias">
			<ol class="bulle">
				<a href="https://www.facebook.com/FondationLouisVuitton" target="_blank"><img src="../img/facebook.png" class="logo-medias"></a>
			</ol>
			<ol class="bulle">
				<a href="https://www.instagram.com/fondationlv" target="_blank"><img src="../img/instagram.png" class="logo-medias"></a>
			</ol>
			<ol class="bulle">
				<a href="https://twitter.com/FondationLV" target="_blank"><img src="../img/twitter.png" class="logo-medias"></a>
			</ol>
			<ol class="bulle">
				<a href="mailto:augustin.brriolon@edu.devinci.fr" target="_blank"><img src="../img/mail.png" class="logo-medias"></a>
			</ol>
			<ol class="bulle">
				<a href="https://www.google.com/maps/search/Fondation+Louis+Vuitton/@48.8924173,2.2429472,14z" target="_blank"><img src="../img/loca.png" class="logo-medias" href="https://www.google.com/maps/search/Fondation+Louis+Vuitton/@48.8924173,2.2429472,14z"></a>
			</ol>
		</ul>
		<!-- emepcher le zoom -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<footer>
			<?php
				include ('../pages/footer.php');
			?>
		</footer>
		<!-- ajout de JS ici -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
		<script src="../script/contact.js"></script>
		<script src="../script/menu.js"></script>
	</body>
</html>
