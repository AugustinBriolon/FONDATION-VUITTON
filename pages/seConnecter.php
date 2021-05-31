<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/index.css">
    <title>Se connecter</title>
</head>
<header>
		<!-- icône menu -->
		<img src="../img/burger.svg" class="icone-menu" alt="Icone Menu"/>
		<!-- menu -->
		<ul class="menu">
		<!-- icône fermer -->
		<img src="../img/croix.svg" class="icone-fermer" alt="Icone Croix"/>
			<li><a href="../index.php" class="menu__item">Home</a></li>
			<li><a href="../pages/histoire.php" class="menu__item">History</a></li>
			<li><a href="../pages/galerie.php" class="menu__item">Gallery</a></li>
			<li><a href="../pages/blog.php" class="menu__item">Animation</a></li>
			<li><a href="../pages/contact.php" class="menu__item">Contact</a></li>
            <li><a href="../pages//seConnecter.php" class="menu__item">Se Connecter</a></li>
            
		</ul>
	</header>

    <body>
        <video poster="../img/imageFLVvideo.png id="videoFVL" playsinline autoplay muted loop>
            <source src="../img/flvVideo.mp4" type="video/mp4">
        </video>


        <div class="login-form">

            <?php 
                if(isset($_GET['login_err']))
                    {
                        $err = htmlspecialchars($_GET['login_err']);  
                        switch($err)
                        {
                            case 'password':
            ?>
        <div>
            <strong class="erreurConnexion">Erreur, mot de passe incorrect</strong> 
        </div>
        <?php
            break;
            case 'email':
        ?>
            <div>
                <strong class="erreurConnexion">Erreur, email incorrect</strong>
            </div>
        <?php
            break;
            case 'already':
        ?>
            <div>
                <strong class="erreurConnexion">Erreur, compte non existant</strong>
            </div>
        <?php
            break;
                    }
                }
        ?>    

            <form action="login.php" method="post">
                <h2 id="connexion">Connexion</h2>       
        <div class="form-group">
            <input type="email" name="email" class="emailConnexion" placeholder="Email" required="required" autocomplete="on">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="passwordConnexion" placeholder="Mot de passe" required="required" autocomplete="on">
        </div>
        <div class="form-group">
            <button type="submit" class="btnConnexion">Connexion</button>
        </div>   
            </form>
        </div>

        <script src="../header/header.js"></script>

    </body>
</html>