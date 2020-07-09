<?php require_once 'coche.php'; ?>
<?php

$coche = new coche('azul', 'mercedes', 'a', 200, 150, 4);


//var_dump($coche);
/*$coche->setColor('verde');
$coche->setMarca('audi');*/

echo $coche->mostrarInformacion($coche);
?>