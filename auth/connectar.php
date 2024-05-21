<?php
    // newPDO: connectem amb la BD
    $usuari="root";
    $password="";    
    $database ="uf1-m7";
    $host = "localhost";

    try {
                
        $bd = new PDO('mysql:host='.$host.';dbname='.$database, 
                        $usuari, $password); 	   

    } catch (PDOException $e) {
        echo "No s'ha pogut connectar amb la Base de dades";
        die();
    }
?>