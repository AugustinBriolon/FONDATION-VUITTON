<?php
    session_start();
?>
        <!-- icône menu -->
		<img src="/projet/img/burger.svg" class="icone-menu" alt="Icone Menu"/>
        <!-- menu -->
		<ul class="menu">
			<!-- icône fermer -->
			<img src="/projet/img/croix.svg" class="icone-fermer" alt="Icone Croix"/>
			<li><a href="/projet/index.php" class="menu__item"><?php echo $_SESSION["user"];?></a></li>
			<li><a href="/projet/index.php" class="menu__item">Home</a></li>
			<li><a href="/projet/pages/histoire.php" class="menu__item">History</a></li>
			<li><a href="/projet/pages/galerie.php" class="menu__item">Gallery</a></li>
			<li><a href="/projet/pages/blog.php" class="menu__item">Blog</a></li>
			<li><a href="/projet/pages/contact.php" class="menu__item">Contact</a></li>
			<li><a href="/projet/pages/seConnecter.php" class="menu__item">Se Connecter</a></li>
		</ul>