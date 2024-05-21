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
    <title>ACT-PROJECTE-BASICA-LINKS</title>
</head>
<body>
    <a href="desti.html">
    <?php
        $numLinks=4;

        for($i=1; $i<=$numLinks; $i++){
            echo "pagina$i <br>";
        }
    ?>
    </a>
</body>
</html>