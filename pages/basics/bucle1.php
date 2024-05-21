<?php 

    include "../../auth/seguretat.php";
    include "../../templates/header.php"; 
    include "../../templates/menu.php"; 
?>


<div class="container">
<h3>Fem un bucle per crear una llista</h3>
<ul>
    <?php 

        for($i=0;$i<10;$i++) {
            echo "<li>$i</li>";
        }

    ?>
</ul>
 
</div>
