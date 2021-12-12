<?php
require "clases/vehiculo.php";
require "clases/motocicleta.php";
require "clases/automovil.php";
require "clases/persona.php";

session_start();

$documentoBusqueda = $_POST["documentoBusqueda"];

$arrayDocumentos = array();

foreach ($_SESSION["personas"] as $persona) {
   array_push($arrayDocumentos, $persona->documento);
}



$indice = array_search($documentoBusqueda, $arrayDocumentos,false);

header("location: index.php?persona=$indice");

?>