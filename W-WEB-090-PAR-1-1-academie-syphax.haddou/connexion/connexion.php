<?php
    /* Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:dbname=globe;host=127.0.0.1';
    $username = 'test'; // CHANGER A CHQUE PUSH MERCIII 
    $password = 'wac';

    $db = new PDO($dsn, $username, $password);
    
    // echo "Connexion réussie";
?>