<?php

class servicio {
    private $host = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $bd = "pokemon";
    public $conex; 

    function __construct(){
        $this->conex = mysqli_connect($this->host,$this->usuario,$this->pass,$this->bd);
    }

    public function crearEntrenador($tabla, $valores){
        $insertar = "INSERT INTO $tabla
            (`nombre`, `foto`, `fondo`, `ciudad`)
            VALUES ($valores);
        ";
        mysqli_query($this->conex,$insertar);
        echo '
        <h1 class="text-muted">
            <ins>
                <center>
                    ¡El ENTRENADOR se ha registrado con éxito!
                </center>
            </ins>
        </h1>
        ';
    }

    public function asignarPokemon($tabla, $valores){
        $asignarPokemon = "INSERT INTO $tabla
            (`id_entrenador`, `id_pokemon`) 
            VALUES ($valores);
        ";
        mysqli_query($this->conex,$asignarPokemon);
        echo '
        <h1 class="text-muted">
            <ins>
                <center>
                    ¡Pokemon asignado con mucho éxito!
                </center>
            </ins>
        </h1>
        ';
    }

    public function listar_ids($tabla){
        $mostrarTodos = "SELECT * FROM $tabla";
        return mysqli_query($this->conex,$mostrarTodos);
    }

    public function listarEntrenadorIndividual($tabla, $columna, $nombre){
        $mostrarDetalle = "SELECT * FROM $tabla
            WHERE($columna = $nombre);
        ";
        return mysqli_query($this->conex,$mostrarDetalle);
    }

    public function listarIdPokemon($tabla, $columna, $nombre){
        $mostrarpokemon = "SELECT id_pokemon FROM $tabla
            WHERE($columna = $nombre);
        ";
        return mysqli_query($this->conex,$mostrarpokemon);
    }  
}

?>
