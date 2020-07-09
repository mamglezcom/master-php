<?php

class Persona{
    public $nombre;
    public $edad;
    public $ciudad;
    
    public function __construct($nombre,$edad,$ciudad) {
       $this->nombre = $nombre;
       $this->edad = $edad;
       $this->ciudad = $ciudad;
    }
    
    public function __call($name, $arguments) {
        return "no existe el metodo";
    }
}

$persona = new Persona('miguel',47,'madrid');

echo $persona->getNombre();
