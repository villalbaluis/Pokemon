<?php

include("../index.php");
include("../servicio/servicio.php");

$entrenadores = 'entrenadores';

$instanciaDatos = new servicio();
$datos_entrenadores = $instanciaDatos->listar_ids($entrenadores);

?>

<div class="container">
    <form style="margin-top: 6% !important;" method="post" action="../entrenador/info_entrenador.php" autocomplete="off">
        <h1 class="text-muted">
            <ins>
                <center>
                    Consultar información de un entrenador
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
        </div>
        <center>
            <button type="submit" class="btn btn-outline-success">¡Mostrar datos del entreador!</button>
        </center>
    </form>
</div>
