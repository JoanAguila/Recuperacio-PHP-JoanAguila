<?php 
include "../../auth/seguretat.php";
include "../../templates/header.php"; 
include "../../templates/menu.php"; 

if(isset($_POST['total'])){
    echo "La suma total es: " . $_POST['total'];
}
?>

Numero de caixes
<form method="post" action="extra2.php">
    <select name="caixes">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<option>$i</option>";
        }
        ?>
    </select>
    <br>
<input type="submit" value="Enviar">
    <br>
    <form method="post" action="extra2.php">
    <br>
    <?php
    if(isset($_POST['caixes'])){
        $num_caixes = $_POST['caixes'];
        for($i = 0; $i < $num_caixes; $i++){
            echo "<input type='text' name='numero[]'><br>";
        }
    }
    ?>

    <input type="submit" value="Sumar">
</form>

<?php
    if(isset($_POST['numero'])){
        $total = array_sum($_POST['numero']);
        echo "La suma total es: " . $total;
    }
?>
