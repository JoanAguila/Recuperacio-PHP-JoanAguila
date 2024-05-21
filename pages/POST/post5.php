<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
<form method="POST"> 
    <select multiple name="menu[]">
    <?php    
        $menu = ['pizza','macarrons','verdura','sopa','pollastre'];
        foreach($menu as $plat) {
            $option = "<option value=$plat>$plat</option>";
            echo $option;
        }
    ?>
    </select>
    <input type="submit" name="enviar" value="Enviar"> <br>
</form>

<?php

if(isset($_POST['menu'])) { 
    echo "Has triat: ";
    foreach($_POST['menu'] as $plats) {
            echo $plats." ";
    }
}
?>
