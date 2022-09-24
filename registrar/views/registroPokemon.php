<?php

include("../../index.php");
include("../../servicio/servicio.php");

$entrenadores = 'entrenadores';
$pokemon = 'pokemon';

$instanciaDatos = new servicio();
$datos_entrenadores = $instanciaDatos->listar_ids($entrenadores);
$datos_pokemon = $instanciaDatos->listar_ids($pokemon);

?>
<div class="container">
    <form style="margin-top: 6% !important;" method="post" action="../registrarPokemon.php" autocomplete="off">
        <h1 class="text-muted">
            <ins>
                <center>
                    Asignar pokemon para entrenador
                </center>
            </ins>
        </h1>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <select class="form-select" name="id_entrenador">
                        <option selected>Seleccione un entrenador</option>
                        <?php
                            if ($datos_entrenadores->num_rows > 0) {
                                while($entrenador = $datos_entrenadores->fetch_assoc()) {
                                  echo '<option value="'.$entrenador["id"].'">'.$entrenador["nombre"].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <select class="form-select" name="id_pokemon">
                        <option selected>Seleccione un pokemon</option>
                        <?php
                            if ($datos_pokemon->num_rows > 0) {
                                while($entrenador = $datos_pokemon->fetch_assoc()) {
                                  echo '<option value="'.$entrenador["pok_id"].'">'.$entrenador["pok_name"].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <center>
            <button type="submit" class="btn btn-outline-info">¡Guardar nuevo entreador!</button>
        </center>
    </form>
</div>
