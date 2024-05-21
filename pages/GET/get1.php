<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT-PROJECTE-GET-TAULA-MULTIPLICAR</title>
</head>
<body>
    <?php
         if(isset( $_GET['numero'] )){
        for ($i = 1; $i <= 10; $i++) {
        echo  $_GET['numero']. "*". $i ."=".$i*$_GET['numero']. "<br>";
        }
    }
    else{
        echo "Afegeix ?numero= a la URL";
    }
    ?>
</body>
</html>