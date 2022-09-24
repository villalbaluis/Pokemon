<?php

include("../index.php");
include("../servicio/servicio.php");

$id_entrenador = $_POST['id_entrenador'];

$instancia_Trainner = new servicio();
$datosEntrenador = $instancia_Trainner->listarEntrenadorIndividual(
    "entrenadores", 
    "id", 
    "'$id_entrenador'
    ");
$dataEntrenador = mysqli_fetch_array($datosEntrenador);
$id = $dataEntrenador['id'];
$nombre = $dataEntrenador['nombre'];
$foto = $dataEntrenador['foto'];
$fondo = $dataEntrenador['fondo'];
$ciudad = $dataEntrenador['ciudad'];
?>

<head>
    <link rel="stylesheet" href="../style/style.css">
</head>
<div class='container' style='margin-top: 5% !important'>
    <div class="card_entrenador d-flex justify-content-center mx-auto" style="background-image: url(<?php echo $fondo; ?>);">
        <div class="col-7">
            <h2 class="card-titulo">FICHA DE ENTRENADOR</h2>
            <div class="row info">
                <div class="col-6">
                    <h4>Nombre</h4>
                </div>
                <div class="col-6">
                    <h4><?php echo $nombre;?></h4>
                </div>
            </div>
            <div class="row info">
                <div class="col-6">
                    <h4>Ciudad</h4>
                </div>
                <div class="col-6">
                    <h4><?php echo $ciudad;?></h4>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row info">
                <div class="col-6">
                    <h4>N° ID</h4>
                </div>
                <div class="col-6">
                    <h4><?php echo $id;?></h4>
                </div>
            </div>
            <div class="info">
                <img src="<?php echo $foto;?>" alt="FOTO" width="100%">
            </div>
        </div>
    </div>
</div>

<?php
$datosPokemon = $instancia_Trainner->listarIdPokemon(
    "pokemon_entrenador", 
    "id_entrenador", 
    "'$id_entrenador'
    ");

echo "<div class='row'>";
while ($filas = mysqli_fetch_assoc($datosPokemon)) {
    $pokemon = $instancia_Trainner->listarEntrenadorIndividual(
        "pokemon", 
        "pok_id", 
        "'$filas[id_pokemon]'");
    if ($pokemon->num_rows > 0) {
        while($pok = $pokemon->fetch_assoc()) {
            echo "<div class='col-4'>
                    <div class='row info'>
                        <div class='col-5'>
                            <img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/".$pok['pok_id'].".svg' alt='FOTO' width='100%'>
                        </div>
                        <div class='col-4'>
                            <h2>".$pok['pok_name']."
                        </div>
                    </div>
                </div>";
        }
    }
}
echo "</div>";
?>
