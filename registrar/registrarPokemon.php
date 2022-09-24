<?php

include("../index.php");
include("../servicio/servicio.php");

$id_entrenador = $_POST['id_entrenador'];
$id_pokemon = $_POST['id_pokemon'];

$instanciaRegistro = new servicio();
$instanciaRegistro->asignarPokemon(
    "pokemon_entrenador",
    "
    '$id_entrenador',
    '$id_pokemon'
    ");

?>
