<?php

/* 
 * predefinidas
 */
// var_dump
$texto = "hola";
var_dump($texto);
//fecha
echo date('d-m-Y');// 30-06-2020
echo "<br>";
echo time();// 1593515554
echo "<br>";

//matematicas
echo "raiz cuadrada de 10: " . sqrt(10); // raiz cuadrada de 10: 3.1622776601684
echo "<br>";
echo "numero aleatorio: " . rand(10, 40);
echo "<br>";
echo "numero PI: " . pi(); // numero PI: 3.1415926535898
echo "<br>";
echo "redondear: " . round(7.48,1); //7.5

echo "<br>";
echo gettype($texto); //string
echo "<br>";
if(!is_float($texto)){
    echo "no es string";
}
echo "<br>";
if(!isset($edad) ){
    echo "no es definida";
}

$frase = "    kdkdj    ";
echo trim($frase);

?>