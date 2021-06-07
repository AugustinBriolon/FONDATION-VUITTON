<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/x-icon" href="../img/LogoFVL.png"/><link rel="shortcut icon" type="image/x-icon" href="img/LogoFVL.png" />
</head>
<header>
    <?php
        include ('./menu.php');
    ?>
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
                }
                }
            ?>    

            <form action="login.php" method="post class="form_login">
                <h2 id="connexion">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="emailConnexion" placeholder="Email" required autocomplete="on">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="passwordConnexion" placeholder="Mot de passe" required autocomplete="on">
                </div>
                <div class="form-group">
                    <button type="submit" class="btnConnexion buttonCommun">Connexion</button>
                </div>   
            </form>
        </div>
        <script src="../script/menu.js"></script> 
    </body>
</html>