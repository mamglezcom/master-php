<?php

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = 'miguel';
        $this->email = 'mamglec.com';
        echo "instancia de objeto creada<br>";
    }
    
    public function __destruct() {
        echo "destruyendo...";
    }
    
    public function __toString() {
        return "hola, {$this->nombre}, estas registrado con {$this->email}";
    }

}

$usuario = new Usuario();
echo $usuario->email;
echo $usuario;

/*for($i = 0; $i <= 200; $i++){
    echo $i."<br>";
}*/
?>