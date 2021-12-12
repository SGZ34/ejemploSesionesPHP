<?php
session_start();
require "clases/vehiculo.php";
require "clases/motocicleta.php";
require "clases/automovil.php";
require "clases/persona.php";


$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$pago = $_POST["pago"];

$placa = $_POST["placa"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$cilindraje = $_POST["cilindraje"];
$numeroPuertas = $_POST["numeroPuertas"];
$tipo = $_POST["tipo"];

$persona = new persona();
$persona->documento = $documento;
$persona->nombre = $nombre;
$persona->telefono = $telefono;
$persona->direccion = $direccion;
$persona->placaVehiculo = $placa;
$persona->pago = $pago;
$fecha = getdate();
$stringFecha = $fecha["mon"] . "/" . $fecha["mday"] . "/" . $fecha["month"] . " " . $fecha["hours"] . ":". $fecha["minutes"] . ":" . $fecha["seconds"];

$persona->fecha = $stringFecha;


$personas = isset($_SESSION["personas"]) ? $_SESSION["personas"] : [];
$personas[] = $persona;
$_SESSION["personas"] = $personas;

if(isset($_POST["motocicleta"])){

    $motocicletas = isset($_SESSION["motocicletas"]) ? $_SESSION["motocicletas"] : [];

    

    $motocicleta = new motocicleta();
    $motocicleta->placa = $placa;
    $motocicleta->marca = $marca;
    $motocicleta->modelo = $modelo;
    $motocicleta->cilindraje = $cilindraje;

    $motocicletas[] = $motocicleta;


    $_SESSION["motocicletas"] = $motocicletas;
    
}
if(isset($_POST["automovil"])){
    $automoviles = isset($_SESSION["automoviles"]) ? $_SESSION["automoviles"] : [];
    $automovil = new automovil();
    $automovil->placa = $placa;
    $automovil->marca = $marca;
    $automovil->modelo = $modelo;
    $automovil->numeroPuertas = $numeroPuertas;
    $automovil->tipo = $tipo;

    $motocicletas[] = $automovil;

    $_SESSION["automoviles"] = $automoviles;
}

header("location: index.php");


?>