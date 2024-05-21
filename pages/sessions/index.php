<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['SESSIONS'])) {
    $_SESSION['comptadors']['SESSIONS'] = 0;
}
$_SESSION['comptadors']['SESSIONS']++;
?>

<div class="container">
 
 <a href="sessions1.php">sessions1</a><br>
 
 
</div>
