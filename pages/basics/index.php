<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['BASIQUES'])) {
    $_SESSION['comptadors']['BASIQUES'] = 0;
}
$_SESSION['comptadors']['BASIQUES']++;
?>


<div class="container">
 
 <a href="bucle1.php">Bucle 1</a><br>
 
 <a href="Act1.php">ACT-PROJECTE-BASICA-IF-DATE</a><br>

 <a href="Act2.php">ACT-PROJECTE-BASICA-TAULA HORITZONTAL</a><br>

 <a href="Act3.php">ACT-PROJECTE-BASICA-QUADRATS</a><br>

 <a href="Act4.php">ACT-PROJECTE-BASICA-LINKS</a><br>
 
 
</div>

