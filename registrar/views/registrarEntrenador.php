<?php

include("../../index.php");

?>
<div class="container">
    <form style="margin-top: 6% !important;" method="post" action="../registrar.php" autocomplete="off">
        <h1 class="text-muted">
            <ins>
                <center>
                    Registro de un nuevo entrenador
                </center>
            </ins>
        </h1>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="nombre_entrenador">Nombre del entrenador: </label>
                    <input type="text" id="nombre_entrenador" class="form-control" name="nombre_entrenador"/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="foto_entrenador">Foto del entrenador: </label>
                    <input type="text" id="foto_entrenador" class="form-control" name="foto_entrenador"/>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="fondo_entrenador">Fondo de la tarjeta: </label>
                    <input type="text" id="fondo_entrenador" class="form-control" name="fondo_entrenador"/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="ciudad_entrenador">Ciudad del entrenador: </label>
                    <input type="text" id="ciudad_entrenador" class="form-control" name="ciudad_entrenador"/>
                </div>
            </div>
        </div>
        <center>
            <button type="submit" class="btn btn-outline-info">¡Guardar nuevo entreador!</button>
        </center>
    </form>
</div>
