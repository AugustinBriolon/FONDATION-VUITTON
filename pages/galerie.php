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

      <button id="buttonTout">All</button>
      <button id="buttonOut">Outdoor</button>
      <button id="buttonInt">Indoor</button>
      
        <div id="galerieImages">
            <img class="images extFLV" src="../img/Interieur2.png" />
            <img class="images extFLV" src="../img/BatFLV6.jpg" />
            <img class="images extFLV intFLV" src="../img/FranckGhery.png" />
            <img class="images intFLV" src="../img/Interieur.png" />
            <img class="images extFLV" src="../img/Nuit.png" />
            <img class="images extFLV" src="../img/Vu du haut.png" />
            <img class="images extFLV" src="../img/Voile.png" />
            <img class="images intFLV" src="../img/Restaurant.png" />
            <img class="images extFLV" src="../img/MaquetteGalerie.png" />
        </div>

    <?php

      function censure($txt) {
        return str_replace(array_map('trim', file('censure.txt')), '[Censuré]', $txt);
      }

      require_once 'config.php'; // On inclut la connexion à la base de données

      if(isset($_GET["id"])){$id = $_GET["id"] ; $bdd->exec("DELETE FROM commentaires WHERE id =" . $id . "");};                    

      if($_POST){
        $_POST['pseudo'] = censure(addslashes(($_POST['pseudo'])));
        $_POST['message'] = censure(addslashes(($_POST['message'])));

        $bdd->exec("INSERT INTO commentaires (pseudo, message, date) VALUES ('$_POST[pseudo]', '$_POST[message]',NOW())");}

        $r = $bdd->query('SELECT * FROM commentaires  ORDER BY id DESC');

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
      <script src="../script/galerie.js"></script>
      <script src="../script/menu.js"></script>
  </body>
</html>