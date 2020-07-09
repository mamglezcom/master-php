<?php

//herencia
class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function __construct($nombre, $apellidos, $altura, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->altura = $altura;
        $this->edad = $edad;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function hablar($frase){
        return "estoy hablando";
    }
    
    public function caminar(){
        return "camino!";
    }
}

//clase informatico
class Informatico extends Persona{
    
    public $puesto;
    
    public function __construct($puesto) {
        parent::__construct($nombre, $apellidos, $altura, $edad);
        $this->puesto = $puesto;
    }

    
    public function programar(){
        return "soy programador";
    }
    
    public function reparar(){
        return "reparo ordenadores";
    }
    
    public function hacerOfimatica(){
        return "estoy escribiendo en word";
    }
    public function getPuesto() {
        return $this->puesto;
    }

    public function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

}

// tecnico sistemas
class Tecnico extends Informatico{
    public $auditarRedes;
    
    public function __construct($auditarRedes) {
        parent::__construct($puesto);
        $this->auditarRedes = $auditarRedes;
    }

    
    public function auditar(){
        return "auditando...";
    }
    
}

?>
