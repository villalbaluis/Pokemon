<?php

include("../index.php");
include("../servicio/servicio.php");

$nombre_entrenador = $_POST['nombre_entrenador'];
$foto_entrenador = $_POST['foto_entrenador'];
$fondo_entrenador = $_POST['fondo_entrenador'];
$ciudad_entrenador = $_POST['ciudad_entrenador'];

$instanciaRegistro = new servicio();
$instanciaRegistro->crearEntrenador(
    "entrenadores",
    "
    '$nombre_entrenador',
    '$foto_entrenador',
    '$fondo_entrenador',
    '$ciudad_entrenador'
    ");

?>
