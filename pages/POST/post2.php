<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
<form action="post2.php" method="post">
    Preu <input type="number" name="preu" step="0.1"><br>
    Quantitat <input type="number" name="quantitat" step="0.1"><br>
    Aplicar descompte? <input type="checkbox" name="checkbox"><br>
    Descompte <input type="number" name="descompte" step="0.1">%<br>
    <input type="submit" value="Enviar">
</form>


<?php
    if(isset($_POST['preu']) && isset($_POST['quantitat']) && isset($_POST['descompte'])){
        echo'Total sense descompte '.($_POST['preu']*$_POST['quantitat']).'€<br>';
        if(isset($_POST['checkbox'])){
            echo'Total amb descompte '.(($_POST['preu']*$_POST['quantitat'])-(($_POST['preu']*$_POST['quantitat'])*($_POST['descompte']/100))).'€';
        }
        
    }
?>
