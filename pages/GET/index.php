<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['GET'])) {
    $_SESSION['comptadors']['GET'] = 0;
}
$_SESSION['comptadors']['GET']++;
?>


<div class="container">
 
 <a href="get1.php">ACT-PROJECTE-GET-TAULA-MULTIPLICAR</a><br>
 <a href="get2.php">ACT-PROJECTE-GET-ARRAY-MESOS-DIES</a><br>
 <a href="get3.php">ACT-PROJECTE-GET-TAULA DIVISORS</a><br> 
 
 
</div>
