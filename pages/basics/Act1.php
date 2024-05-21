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
    <title>Act1</title>
</head>
<body>
    <?php

        $dia= date('2');
        $hora24 = date('9');

        if($dia==0 || $dia==6){
            echo "No es pos accedir";
        }
        else if($hora24 < 8){
            echo "La pagina s'obrirá a les 8:00";
        }
        else{
            echo "Pots entrar";
        }
    ?>
</body>
</html>