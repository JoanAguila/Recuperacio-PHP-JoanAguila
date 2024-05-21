
<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
Introdueix una nota:
<form action="post1.php" method="post">
    <input type="number" name="nota" step="0.1">
    <input type="submit" name="Enviar">
</form>

<?php
    if(isset($_POST['nota']) && $_POST['nota']<5) echo'Insuficient';
    else if(isset($_POST['nota']) && $_POST['nota'] >=5 && $_POST['nota'] < 7) echo 'Suficient';
    else if(isset($_POST['nota']) && $_POST['nota'] >= 7 && $_POST['nota'] < 9) echo 'Notable';
    else if(isset($_POST['nota']) && $_POST['nota']<=10)echo 'Exel·lent';
?>