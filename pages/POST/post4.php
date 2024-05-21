<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
<h1>Planetas</h1>

<?php
$distancies = [
    "Mercuri"   => 57910000,
    "Venus"     => 108200000,
    "La Terra"  => 146600000,
    "Mart"      => 227940000,
    "Júpiter"   => 778330000,
    "Saturn"    => 1429400000,
    "Urà"       => 2870990000,
    "Neptú"     => 4504300000
];
?>

<form method="post">
    Origen <select name="Planeta1">
        <option value="Mercuri">Mercuri</option>
        <option value="Venus">Venus</option>
        <option value="La Terra">La Terra</option>
        <option value="Mart">Mart</option>
        <option value="Júpiter">Júpiter</option>
        <option value="Saturn">Saturn</option>
        <option value="Urà">Urà</option>
        <option value="Neptú">Neptú</option>
    </select>
    Desti <select name="Planeta2">
        <option value="Mercuri">Mercuri</option>
        <option value="Venus">Venus</option>
        <option value="La Terra">La Terra</option>
        <option value="Mart">Mart</option>
        <option value="Júpiter">Júpiter</option>
        <option value="Saturn">Saturn</option>
        <option value="Urà">Urà</option>
        <option value="Neptú">Neptú</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Calcular Distancia">
    <br>
    <br>
</form>

<?php
    if (isset($_POST['Planeta1']) && isset($_POST['Planeta2']) ) {
    if($distancies[$_POST['Planeta1']] > $distancies[$_POST['Planeta2']]){
         echo"La distancia entre el planeta ".$_POST["Planeta1"]." y el planeta ".$_POST["Planeta2"]." es de ".($distancies[$_POST['Planeta1']] - $distancies[$_POST['Planeta2']]);
    }
    else echo"La distancia entre el planeta ".$_POST["Planeta1"]." y el planeta ".$_POST["Planeta2"]." es de ".($distancies[$_POST['Planeta2']] - $distancies[$_POST['Planeta1']]);
    }
?>