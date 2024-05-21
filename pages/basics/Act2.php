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
    <title>ACT-PROJECTE-BASICA-TAULA HORITZONTAL</title>
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
    <?php
        for($i=0;$i<=10;$i++) {
            echo "<td>$i</td>";
        }
    ?>
    </tr>
</table>
</body>
</html>