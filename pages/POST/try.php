
<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
<form action="processar.php" method="post">
    Nom <input type="text" name="nom"><br>
    Cognom <input type="text" name="cognom"><br>
    <input type="submit" name="enviar"><br>
</form>