<?php

// poo en php

// clase: molde para crear objetos
class coche{
    //atributos o propiedades
    public $color = 'rojo';
    public $marca = 'ferrari';
    public $modelo = 'mons';
    public $velocidad = 300;
    public $caballaje = 400;
    public $plazas = 2;
    
    //metodos, acciones del objeto
    public function getColor(): string{
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function acelerar($cantidad){
        $this->velocidad+=$cantidad;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
}//fin class

//crear o instanciar clase
$coche = new coche();
$coche2 = new coche();

//usar metodos
echo $coche->getVelocidad()."<br>";

$coche->setColor('amarillo');
echo "el color del coche es ". $coche->getColor()."<br>";

$coche->acelerar(10);
echo $coche->getVelocidad();

var_dump($coche);
var_dump($coche2);
?>