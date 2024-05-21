
<form method="post">
Entra el tamany de la font
<br>
<select name="tamaño">
    <option value = "10">10</option>
    <option value = "20">20</option>
    <option value = "30">30</option>
</select>
<br>
<br>

Entra el color de la fort
<br>
<input id="red" name="color" value="red" type="radio">
Vermell
<input id="blue" name="color" value="blue" type="radio">
Blau
<input id="green" name="color" value="green" type="radio">
Verd
<br>
<br>
<input type="submit" value="Enviar" name="enviar">
</form>

<?php

if (isset($_POST["tamaño"]) && isset($_POST["color"])) {
    $tamaño = $_POST["tamaño"];
    $color = $_POST["color"];
    setcookie("tamaño_fuente", $tamaño, time() + 3600);
    setcookie("color_fuente", $color, time() + 3600);
    header("Location: cookies1_1.php");
}

?>

