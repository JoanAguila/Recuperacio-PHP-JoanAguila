<?php 
include "../../auth/seguretat.php";
include "../../templates/header.php"; 
include "../../templates/menu.php"; 
include "../../auth/connectar.php";


if (!isset($_SESSION['comptadors'])) {
    $_SESSION['comptadors'] = array();
}
if (!isset($_SESSION['comptadors']['PDO'])) {
    $_SESSION['comptadors']['PDO'] = 0;
}
$_SESSION['comptadors']['PDO']++;
?>
<im?php 
$base_path = $_SERVER['DOCUMENT_ROOT'] . '/portafoli-personal-php/';
?>

<img src="../../php.drawio.png" alt="Model e-r drawio" style="display: block; margin-left: auto; margin-right: auto; width: 40%;"></img>
<div class="container">

<head>
    <title>Nou Jugador</title>
</head>

<body>

<h2> Nou jugador</h2>

<form method="POST">
    <label for="id">ID:</label><br>
    <input type="text" id="id" name="id" required><br><br>

    <label for="nombre">Nombre del jugador:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="edad">Edad del Jugador:</label><br>
    <input type="text" id="edad" name="edad" required><br><br>

    <label for="posicion">Posicion:</label><br>
    <input type="text" id="posicion" name="posicion" required><br><br>

    <label for="equips">Equipo:</label><br>
    <select id="equips" name="equips" required>
        <option value="1">Barcelona</option>
        <option value="2">Real_Madrid</option>
        <option value="3">Manchester_United</option>
    </select> <br><br>

    <input type="submit" name="desar" value="Desar">
</form>

<?php
if (isset($_POST['desar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $posicion = $_POST['posicion'];
    $equipo_id = $_POST['equips'];

    $sql = "INSERT INTO jugadors (id, nombre, edad, posicion, equipo_id) VALUES (:id, :nombre, :edad, :posicion, :equipo_id)";

    $ordre = $bd->prepare($sql);
    $ordre->bindValue(':id', $id);
    $ordre->bindValue(':nombre', $nombre);
    $ordre->bindValue(':edad', $edad);
    $ordre->bindValue(':posicion', $posicion);
    $ordre->bindValue(':equipo_id', $equipo_id);

    $res = $ordre->execute();
}

$sql = "SELECT j.id, j.nombre AS jugador_nombre, j.edad, j.posicion, e.nombre AS equipo_nombre, e.estadio 
        FROM jugadors j 
        INNER JOIN equips e ON j.equipo_id = e.id";
$consulta = $bd->query($sql);
?>

<html>
<head>
    <style>
    table {
        border-collapse: separate;
        border-spacing: 20px;
    }
    </style>
</head>
<body>
<h2> Registre de jugadors i equips </h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Posicion</th>
            <th>Nombre Equipo</th>
            <th>Estadio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['jugador_nombre'] . "</td>";
            echo "<td>" . $fila['edad'] . "</td>";
            echo "<td>" . $fila['posicion'] . "</td>";
            echo "<td>" . $fila['equipo_nombre'] . "</td>";
            echo "<td>" . $fila['estadio'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>
</div>

<?php 
include "../../templates/footer.php";    
?>
