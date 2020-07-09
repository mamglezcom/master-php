<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>".$this->nombre."<h1>";
    }
}

class Coche{
    public $nombre = 'audi';
    public $marca;
    use Utilidades;// usar metodo de trait
}

class Persona{
    public $nombre;
    public $apellidos;
}

class Videojuego{
    public $nombre;
    public $anio;
}

$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();

$coche->mostrarNombre();

?>