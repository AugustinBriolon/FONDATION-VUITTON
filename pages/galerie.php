<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<title>Fondation Louis Vuitton</title>
		<link rel="stylesheet" href="../style/index.css">
    </head>
    <body>
      <?php
          include('./menu.php');
      ?>
      <!-- ajout d'un titre -->
      <h1 id="texteGallery">Gallery</h1>

        <div id="galerieImages">
            <img class="images" src="../img/Interieur2.png" />
            <img class="images" src="../img/BatFLV6.jpg" />
            <img class="images" src="../img/FranckGhery.png" />
            <img class="images" src="../img/Interieur.png" />
            <img class="images" src="../img/Nuit.png" />
            <img class="images" src="../img/Vu du haut.png" />
            <img class="images" src="../img/Voile.png" />
            <img class="images" src="../img/Restaurant.png" />
            <img class="images" src="../img/MaquetteGalerie.png" />
        </div>
    </body>
    <script src="../script/galerie.js"></script>
</html>


<?php

function censure($txt) {
  return str_replace(array_map('trim', file('censure.txt')), '[Censuré]', $txt);
}

$pdo = new PDO('mysql:host=localhost;dbname=dialogue', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if(isset($_GET["id"])){$id = $_GET["id"] ; $pdo->exec("DELETE FROM commentaires WHERE id =" . $id . "");};                    

if($_POST){
    $_POST['pseudo'] = censure(addslashes(($_POST['pseudo'])));
    $_POST['message'] = censure(addslashes(($_POST['message'])));

    $pdo->exec("INSERT INTO commentaires (pseudo, message, date) VALUES ('$_POST[pseudo]', '$_POST[message]',NOW())");}

    $r = $pdo->query('SELECT * FROM commentaires  ORDER BY id DESC');

    while ($commentaires = $r->fetch(PDO::FETCH_ASSOC)) {
      echo "
        <div class='message'>
          <div class='pseudo'>" . $commentaires['pseudo'] . "</div> : <div class='commentaire'>" . $commentaires['message'] . "</div>
          <div class='date'>" . $commentaires['date'] . "</div>
      ";
    
      if ($_SESSION['role'] === 'ADMIN') {
        echo "<a class='delete' href='galerie.php?id=" . $commentaires['id'] . "'> Delete </a>";
      }
    
      echo "</div>";
    }



?>

<hr>

<form method="post" id="zonecommentaire">
	<input type="text" name="pseudo" placeholder="Pseudo" id="zonepseudo" required>
	<textarea name="message" placeholder="Message" id="zonetext" required></textarea>
	<input type="submit" id="zonebouton">
</form>
<footer>
    <?php
		include '../pages/footer.php';
		?>
  </footer>