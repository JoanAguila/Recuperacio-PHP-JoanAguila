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
    <title>ACT-PROJECTE-BASICA-QUADRATS</title>
</head>
<body>
<?php
        $n=12;
        for($i=1;$i<=12;$i++) {
            echo "$i * $i = ".($i*$i)." <br>";
        }
    ?>
</body>
</html>