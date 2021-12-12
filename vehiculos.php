<?php

$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];

$placa = $_POST["placa"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$tipo = $_POST["tipo"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear vehiculo</title>
</head>
<body>

<?php if($tipo == "motocicleta"):?>

<form action="server.php" method="post">
<input type="text" name="documento" value = <?= $documento ?>>
<br>
<input type="text" name="nombre" value = <?= $nombre ?>>
<br>
<input type="text" name="telefono" value = <?= $telefono ?>>
<br>
<input type="text" name="direccion" value = <?= $direccion ?>>
<br>
<select name="pago">
    <option value="horas">horas</option>
    <option value="dia">dia</option>
    <option value="mensualidad">mensualidad</option>
</select>
<br>
<br>

<input type="text" name="placa" value = <?= $placa ?>>
<br>
<input type="text" name="marca" value = <?= $marca ?>>
<br>
<input type="text" name="modelo" value = <?= $modelo ?>>
<br>

<select name="cilindraje">
    <option value="2 tiempos">2 tiempos</option>
    <option value="4 tiempos">4 tiempos</option>
</select>
<button type="submit" name="motocicleta">Crear motocicleta</button>
</form>
<?php endif ?>

<?php if($tipo == "automovil"):?>
    

<form action="server.php" method="post">
    <input type="text" name="documento" value = <?= $documento ?>>
    <br>
    <input type="text" name="nombre" value = <?= $nombre ?>>
    <br>
    <input type="text" name="telefono" value = <?= $telefono ?>>
    <br>
    <input type="text" name="direccion" value = <?= $direccion ?>>
    <br>
    <select name="pago">
        <option value="horas">horas</option>
        <option value="dia">dia</option>
        <option value="mensualidad">mensualidad</option>
    </select>
    <br>
    <input type="text" name="placa" value = <?= $placa ?>>
    <br>
    <input type="text" name="marca" value = <?= $marca ?>>
    <br>
    <input type="text" name="modelo" value = <?= $modelo ?>>

    <br>
    <input type="text" name="numeroPuertas" placeholder = "numero de puertas">
    <br>

    <select name="tipo">
        <option value="automatico">automatico</option>
        <option value="mecanino">mecanico</option>
    </select>
    <button type="submit" name ="automovil">Crear automovil</button>
    <?php endif ?>

</form>
    
</body>
</html>