<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
<h1>Horaris</h1>



<?php

$horari = ["dilluns" =>
["08:00-09:00" => "M4", "09:00-10:00" => "M9", "10:00-11:00" => "M3", "11:30-12:30" => "M3", "12:30-13:30" => "M1", "13:30-14:30" => "M1"],
"dimarts" =>
["08:00-09:00" => "M2", "09:00-10:00" => "M2", "10:00-11:00" => "M10", "11:30-12:30" => "M10", "12:30-13:30" => "M4", "13:30-14:30" => "M4"],
"dimecres" =>
["08:00-09:00" => "M3", "09:00-10:00" => "M3", "10:00-11:00" => "M9", "11:30-12:30" => "M9", "12:30-13:30" => "M1", "13:30-14:30" => "M1"],
"dijous" =>
["08:00-09:00" => "M5", "09:00-10:00" => "M5", "10:00-11:00" => "M2", "11:30-12:30" => "M2", "12:30-13:30" => "M3", "13:30-14:30" => "M3"],
"divendres" =>
["08:00-09:00" => "M3", "09:00-10:00" => "M3", "10:00-11:00" => "M2", "11:30-12:30" => "Tutoria", "12:30-13:30" => "M8", "13:30-14:30" => "M8"]
];

?>

Tria un dia:

<form action="post3.php" method="post">
    <select name="selectDia">
        <option value="dilluns">dilluns</option>
        <option value="dimarts">dimarts</option>
        <option value="dimecres">dimecres</option>
        <option value="dijous">dijous</option>
        <option value="divendres">divendres</option>   
    </select>
    <br><br>
    <input type="submit" value="GO">
</form>

<?php

    if(isset($_POST["selectDia"])) {

    echo "<h3>Horari de" .$_POST['selectDia']."</h3>";

    echo "<table>";
        echo "<tbody>";

    foreach ($horari[($_POST['selectDia'])] as $mod => $hora){
        echo "<tr>";
        echo "<td>".$hora."</td>";
        echo "<td>".$mod."</td>";
        echo "</tr>";
        
    }
    echo "</tbody>";
        echo "</table>";
}
?>
