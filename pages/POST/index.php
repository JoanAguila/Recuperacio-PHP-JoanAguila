<?php 
include "../../auth/seguretat.php";
include "../../templates/header.php"; 
include "../../templates/menu.php"; 


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['POST'])) {
    $_SESSION['comptadors']['POST'] = 0;
}
$_SESSION['comptadors']['POST']++;
?>

<div class="container">
 
 <a href="try.php">Try</a><br>
 <a href="post1.php">ACT-PROJECTE-CALCUL-NOTA</a><br>
 <a href="post2.php">ACT-PROJECTE-DESCOMPTE</a><br>
 <a href="post3.php">ACT-PROJECTE-HORARIS</a><br> 
 <a href="post4.php">ACT-PROJECTE-PLANETES</a><br> 
 <a href="post5.php">ACT-PROJECTE-MENU</a><br> 
 
 
</div>

<?php 
 include "../../templates/footer.php";   
?>