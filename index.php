<?php
require "clases/vehiculo.php";
require "clases/motocicleta.php";
require "clases/automovil.php";
require "clases/persona.php";

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>La carpa</title>
</head>
<body>
<div class="container mt-4">
    

<form action="busqueda.php" method="post">
    <input type="text" name="documentoBusqueda" placeholder="ingrese el documento de la persona">
    <button type="submit">Buscar persona</button>
</form>
<?php
    if(isset($_GET["persona"])): ?>
    <?php
        $indice = $_GET["persona"];
        $persona = $_SESSION["personas"][$indice];
    ?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>placa del vehiculo</th>
            <th>pago</th>
            <th>fecha ingreso</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody> 
                <tr>
                    <td><?= $persona->documento ?></td>
                    <td><?= $persona->nombre ?></td>
                    <td><?= $persona->telefono ?></td>
                    <td><?= $persona->direccion ?></td>
                    <td><?= $persona->placaVehiculo ?></td>
                    <td><?= $persona->pago ?></td>
                    <td><?= $persona->fecha ?></td>
                    <td><button type="submit">Salir</button></td>
                </tr>
    </tbody>
</table>
        
    <?php endif ?>



<br>
<br>
<br>
<br>


<form action="vehiculos.php" method="post">
    <input type="text" name="documento" placeholder="Documento">
    <br>
    <input type="text" name="nombre" placeholder = "nombre">
    <br>
    <input type="text" name="telefono" placeholder ="telefono" >
    <br>
    <input type="text" name="direccion" placeholder = "direccion">
    <br>
    <br>
    <input type="text" name="placa" placeholder = "placa">
    <br>
    <input type="text" name="marca" placeholder = "marca">
    <br>
    <input type="text" name="modelo" placeholder = "modelo">
    <br>
    <select name="tipo" id="">
        <option value="motocicleta">motocicleta</option>
        <option value="automovil">Automovil</option>
    </select>
    <br>
    <button type="submit">Crear</button>

</form>


<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>placa del vehiculo</th>
            <th>pago</th>
            <th>fecha ingreso</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    <?php
            $personas = isset($_SESSION["personas"]) ? $_SESSION["personas"] : [];
            foreach($personas as $persona): ?>
                <tr>
                    <td><?= $persona->documento ?></td>
                    <td><?= $persona->nombre ?></td>
                    <td><?= $persona->telefono ?></td>
                    <td><?= $persona->direccion ?></td>
                    <td><?= $persona->placaVehiculo ?></td>
                    <td><?= $persona->pago ?></td>
                    <td><?= $persona->fecha ?></td>
                    <td><button type="submit">Salir</button></td>
                </tr>
            <?php endforeach; ?>

    </tbody>
</table>
</div>
    
</body>
</html>