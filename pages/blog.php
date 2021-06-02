<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Fondation Louis Vuitton</title>
    <link rel="stylesheet" href="../style/index.css">
</head>

<header>    
  <img src="../img/Logo Grand FLV.png" class="LogoFLV" alt="Image Logo FLV">
</header>

<body>
  <?php
    include('./menu.php');
  ?>
  <h1 id="h1"><P>Blog Page</P></h1>  
  <h5 id="h5">Read lot's of article about the Louis Vuitton Foundation</h5>

    <?php
      $db = new PDO('mysql:host=localhost;dbname=dialogue', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      
      if (isset($_POST['title'], $_POST['content']) && !empty($_POST['title']) && !empty($_POST['content']) && $_FILES["image"]["error"] === 0) {
        
        $title = htmlspecialchars(addslashes($_POST['title']));
        $img = "../assets/upload/" . $_FILES["image"]["name"];
        $content = htmlspecialchars(addslashes($_POST['content']));
        
        $tmp_name = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmp_name, $img);
        
        $sql = "INSERT INTO article (title, image, content) VALUES ('$title', '$img', '$content')";
        $db->exec($sql);
      }
                    
      $r = $db->query('SELECT * FROM article');

      while ($article = $r->fetch(PDO::FETCH_ASSOC)) {
      ?>
        <div class="article">
          <img  src='<?php echo $article['image']; ?>'>
          <h1> <?php echo $article['title']; ?> </h1>
          <p> <?php echo $article['content']; ?> </p>
        </div>
      <?php } ?>
    </article>

    <div id='zone_crearticle'>
      <form method='POST' action='' id='crearticle' enctype='multipart/form-data'>
        <h1>Title :</h1>
        <input type='text' name='title' class='champs' placeholder='Title' required>

        <h1>Image :</h1>
        <input type='file' name='image' value='' id='image' required>

        <h1>Content :</h1>
        <textarea name='content' placeholder='Article' class='champs' id='content' required></textarea>

        <input type='submit' name='submit' value='publish' id='submit' class='btn-blue'>
      </form>

  <!--Ajout de Jquery -->
  <script src="../script/blog.js"></script>

</body>


</html>