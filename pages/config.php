<?php 
    // On se connecte à notre base de odnnée
    try 
    {
        $bdd = new PDO("mysql:host=HOST;dbname=dialogue;charset=utf8", "root", '');
    }

    // On regarde si il y a une erreur
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

