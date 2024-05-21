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
    <title>Arrays 1</title>
</head>
<body>
    <h2>Temperatures Màximes<h2>
    
    <h4>La temperatura màxima mitjana del mes ha estat:</h4>
    <?php
        $suma=0;
        $Temperatures = [ 68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83];

        for($i=0; $i<count($Temperatures); $i++){
            $suma=$suma+$Temperatures[$i];
            $max=$Temperatures[0];
            $min=$Temperatures[0];
        }
        echo round($suma/count($Temperatures))."&deg"."F";

        echo "<h4>Les 4 temperatures màximes més caluroses han estat:</h4>";

        rsort($Temperatures);
        for($i=0; $i<4; $i++){
        echo $Temperatures[$i].'&deg'."F, ";
        }

        echo "<h4>Les 4 temperatures màximes més fresques han estat:</h4>";

        sort($Temperatures);
        for($i=0; $i<4; $i++){
        echo $Temperatures[$i].'&deg'."F, ";
        }

    ?>
</body>
</html>