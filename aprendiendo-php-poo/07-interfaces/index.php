<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class Imac implements Ordenador{
    public $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function apagar() {
        
    }

    public function desfragmentar() {
        
    }

    public function detectarUSB() {
        
    }

    public function encender() {
        
    }

    public function reiniciar() {
        
    }

}

$maquintos = new Imac();
$maquintos->setModelo('macox');

echo $maquintos->getModelo();