<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['COOKIES'])) {
    $_SESSION['comptadors']['COOKIES'] = 0;
}
$_SESSION['comptadors']['COOKIES']++;
?>
<?php 
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/portafoli-personal-php/';
?>

<div class="container">
 
 <a href="cookies1.php">ACT-PROJECTE-PREFERENCIES</a><br>
 
 
</div>

<?php 
    include $base_path."templates/footer.php";    
?>