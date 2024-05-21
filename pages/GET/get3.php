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
    <title>ACT-PROJECTE-GET-TAULA DIVISORS</title>
    <style>
        td, th {
    border: 1px solid #777;
    padding: 0.5rem;
    text-align: center;
}
 
table {
    border-collapse: collapse;
}
 
tbody tr:nth-child(odd) {
    background: #eee;
}
caption {
    font-size: 0.8rem;
}

    </style>
</head>
<body>
    <?php
        if(isset($_GET['M']) && isset($_GET['N'])){
            
        }
        else{
            echo'Introdueix un valor a M i a N a la URL [?M=x&N=x]';
            exit;
        }

        if($_GET['N'] > $_GET['M']){
            echo 'M ha de ser major que N';
            exit;
        } 
        if(filter_var(($_GET['M']), FILTER_VALIDATE_INT)){}
        else{
            echo 'M ha de ser un numero enter';
            exit;
        }
        if(filter_var(($_GET['N']), FILTER_VALIDATE_INT)){}
        else{
            echo 'N ha de ser un numero enter';
            exit;
        }
    ?>

<table>
  <tr>
    <th></th>
  <?php
  for($j = $_GET['N'];$j <= $_GET['M'];$j++){
    echo "<th>".$j."</th>";
  }
    ?>
    </tr>
    
    <?php
        for($i=1;$i<=10;$i++) {
            echo "<tr><td>$i</td>";
            for($k = $_GET['N']; $k <= $_GET['M'];$k++){
            if($k%$i== 0){
                echo '<td>*</td>';
        }
        else{
            echo '<td>-</td>';
        }
    }
    echo'</tr>';
    }
    ?>
    
</table>

</body>
</html>