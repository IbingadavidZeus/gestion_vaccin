<?php
    $server = "localhost";
    $login = "root";
    $password = "";
    $dbname = "gestion_vaccins";

        try
        {
            $connexion = new PDO("mysql:host=$server;dbname=$dbname", $login, $password);
            $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        }
        catch(PDOException $e)
         {
            echo "la connexion a echoué: " .$e->getMessage();
        } 


?>