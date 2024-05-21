<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>

<h1>Numero de Visites</h1>

<ul>
        <?php
        if (isset($_SESSION['comptadors'])) {
            foreach ($_SESSION['comptadors'] as $pagina => $visites) {
                echo "<li>Activitats $pagina: $visites visites</li>";
            }
        } else {
            echo "<li>No hi ha visites registrades encara.</li>";
        }
        ?>
    </ul>