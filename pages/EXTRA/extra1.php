<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>

<form action="extra1.php" method="post">
    Entra el numero de links que vols crear:
    <input type="number" name="numero" step="1"><br>
    <input type="submit">
</form>


<?php
    if(isset($_POST['numero'])){
        for($i = 1; $i <= $_POST['numero']; $i++){
            echo "<a href='extra1.php?n=". $i ."'>pàgina ". $i ."</a> <br>";
        }
    }

    if(isset($_GET['n'])){
    echo "Has fet click sobre enllaç ".$_GET['n'];
    }
?>
