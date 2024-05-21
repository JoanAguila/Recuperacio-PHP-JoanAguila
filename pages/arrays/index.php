<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['ARRAYS'])) {
    $_SESSION['comptadors']['ARRAYS'] = 0;
}
$_SESSION['comptadors']['ARRAYS']++;
?>
<?php 
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/portafoli-personal-php/';
?>

<div class="container">
 
 <a href="arrays1.php">ACT-PROJECTE-ARRAYS-TEMPERATURES</a><br>
 <a href="arrays2.php">ACT-PROJECTE-ARRAYS-CAPITALS</a><br>
 <a href="arrays3.php">ACT-PROJECTE-ARRAYS-MON</a><br> 
 
 
</div>

<?php 
    include $base_path."templates/footer.php";    
?>