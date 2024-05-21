<?php
if(isset($_COOKIE["tamaño_fuente"])){
echo "<div style='font-size: {$_COOKIE['tamaño_fuente']}px; color: {$_COOKIE['color_fuente']}'>Bienvenido a mi Aplicación!</div>";
}
else{
    echo "Bienvenido a mi Aplicación!";
}
?>
<br>
<a href='cookies1.php'>Editar Preferencias</a><br>
<a href="cookies1_2.php">Borrar Preferencias</a>



