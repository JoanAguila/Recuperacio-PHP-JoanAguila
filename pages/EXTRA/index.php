<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['EXTRA'])) {
    $_SESSION['comptadors']['EXTRA'] = 0;
}
$_SESSION['comptadors']['EXTRA']++;
?>
<?php 
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/portafoli-personal-php/';
?>

<div class="container">
 
 <a href="extra1.php">ACT-PROJECTE-LINKS-POST AND GET</a><br>
 <a href="extra2.php">ACT-PROJECTE-SUMA CAIXES</a><br>
 <a href="extra3.php">ACT-PROJECTE-NUMERO VISITES</a><br>
 
 
</div>

<?php 
    include $base_path."templates/footer.php";    
?>