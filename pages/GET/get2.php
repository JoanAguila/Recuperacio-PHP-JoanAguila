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
    <title>ACT-PROJECTE-GET-ARRAY-MESOS-DIES</title>
</head>
<body>
    <?php

        $mesos = [
            'gener'     => 31,
            'febrer'    => 28,
            'març'      => 31,
            'abril'     => 30,
            'maig'      => 31,
            'juny'      => 30,
            'juliol'    => 31,
            'agost'     => 31,
            'setembre'  => 30,
            'octubre'   => 31,
            'novembre'  => 30,
            'desembre'  => 31
];

        if(isset($_GET['mes'])){

        }
        else{
            echo'Introdueix un valor a la URL [?mes=mes]';
            exit;
        }
        foreach ($mesos as $month => $value) {
            if ($_GET['mes'] == $month){
                echo $_GET['mes'] . " te ". $value . " dies ";
            }
        }
    ?>
</body>
</html>