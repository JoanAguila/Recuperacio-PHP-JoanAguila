<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays3</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid;
}
        td{ border:1px solid}
    </style>
</head>
<body>
<table>
  <tr>
    <td><strong>País</strong></td>
    <td><strong>Capital</strong></td>
    <td><strong>Continent</strong></td>
</tr>
  <?php
        $mon=[
            ['ciutat'=>'Tokyo','País'=>'Japan','Continent'=>'Asia'],
            ['ciutat'=>'Mexico ciutat','País'=>'Mexico','Continent'=>'North America'],
            ['ciutat'=>'New York ciutat','País'=>'USA','Continent'=>'North America'],
            ['ciutat'=>'Mumbai','País'=>'India','Continent'=>'Asia'],
            ['ciutat'=>'Seoul','País'=>'Korea','Continent'=>'Asia'],
            ['ciutat'=>'Shanghai','País'=>'China','Continent'=>'Asia'],
            ['ciutat'=>'Lagos','País'=>'Nigeria','Continent'=>'Africa'],
            ['ciutat'=>'Buenos Aires','País'=>'Argentina','Continent'=>'South America'],
            ['ciutat'=>'Cairo','País'=>'Egypt','Continent'=>'Africa'],
            ['ciutat'=>'London','País'=>'UK','Continent'=>'Europe']
            ];

        foreach($mon as $element) {
            echo "<tr>";
            echo "<td>".$element['ciutat']."</td>";
            echo "<td>".$element['País']."</td>";
            echo "<td>".$element['Continent']."</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>