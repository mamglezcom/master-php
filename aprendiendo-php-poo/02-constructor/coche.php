<?php

// poo en php

// clase: molde para crear objetos
class coche{
    //atributos o propiedades
    public $color;
    protected $marca;
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    //constructor
    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
    //metodos, acciones del objeto
    public function getColor() {
        return $this->color;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function getCaballaje() {
        return $this->caballaje;
    }

    public function getPlazas() {
        return $this->plazas;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }

    public function setCaballaje($caballaje) {
        $this->caballaje = $caballaje;
    }

    public function setPlazas($plazas) {
        $this->plazas = $plazas;
    }
    
    public function mostrarInformacion(Coche $miObjeto){
        if(is_object($miObjeto)){
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "<br>Color: ". $miObjeto->color;
            $informacion .= "<br>Modelo: ". $miObjeto->modelo;
            $informacion .= "<br>Velocidad: ". $miObjeto->velocidad;
        }else{
            $informacion = "Tu dato es: ". $miObjeto;
        }
        
        
        return $informacion;
    }
}
?>