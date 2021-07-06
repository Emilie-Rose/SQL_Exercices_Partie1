<?php
    $serveur="localhost";
    $login="root";
    $pass="";
    try{
        //j'utilise les blocs try and catch pour la gestion des erreurs
        $connexion= new PDO ("mysql:host=$serveur",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // exercice 1
        //j'ai crée une base de donnée
        // $connexion->exec("CREATE DATABASE languages"); 

        //exercice 2
        // $connexion->exec("CREATE DATABASE webDevelopment CHARACTER SET utf8 COLLATE utf8_general_ci");

        //exercice 3
        // $connexion->exec("CREATE DATABASE IF NOT EXISTS framwork CHARACTER SET utf8 COLLATE utf8_general_ci ");

        //exercice 4
        // $connexion->exec("CREATE DATABASE IF NOT EXISTS languages CHARACTER SET utf8 COLLATE utf8_general_ci ");

        //exercice 5
        // $connexion->exec("DROP DATABASE languages");

        //exercice 6
        // $connexion->exec("DROP DATABASE IF EXISTS framwork");
  
        //exercice 7
        $connexion->exec("DROP DATABASE IF EXISTS languages");

        echo "base de donnée languages créée <br>";
        echo" base de donnée webDevelopment avec crée avec l'encodage utf-8 <br>";
        echo "base de donnée framwork créée avec utf-8 <br>";
        echo "base de donnée languages créée avec utf-8 <br>";
        echo "base de donnée language supprimé <br>";
        echo "base de donnée framwork supprimé<br>";
        echo "base de donnée language supp si elle existe ";

        }catch(PDOException $e){
        echo'echec : ' . $e->getMessage();
        }
?>