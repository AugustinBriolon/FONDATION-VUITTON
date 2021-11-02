<?php
    session_start();
?>
<body class='light'>
		<!-- icône menu -->
		<img src="../img/burger.svg" class="icone-menu" alt="Icone Menu"/>
        <!-- menu -->
		<ul class="menu">
			<!-- icône fermer -->
			<img src="../img/croix.svg" class="icone-fermer" alt="Icone Croix"/>
			<li><a href="../pages/index.php" class="menu__item"><?php echo $_SESSION["user"];?></a></li>
			<li><a href="../pages/index.php" class="menu__item">Home</a></li>
			<li><a href="../pages/pages/histoire.php" class="menu__item">History</a></li>
			<li><a href="../pages/pages/galerie.php" class="menu__item">Gallery</a></li>
			<li><a href="../pages/pages/blog.php" class="menu__item">Blog</a></li>
			<li><a href="../pages/pages/contact.php" class="menu__item">Contact</a></li>

			<?php
				if (isset($_SESSION['role'])){
			?>
				<li><a href="../pages/pages/logout.php" class="menu__item">Déconnexion</a></li>
			<?php } else{ ?>
				<li><a href="../pages/pages/seConnecter.php" class="menu__item">Se Connecter</a></li>
			<?php } ?>
			
			<button class=" buttonModeD buttonCommun">Dark</button>
		</ul>
</body>