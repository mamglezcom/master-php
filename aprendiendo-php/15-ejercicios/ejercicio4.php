<?php

/* crear 4 variables, array, string, int, boolean, imprimir mensaje con el tipo
 */

$array = array(1,2,3);
$cadena = "hola";
$entero = 2;
$verdad = true;

echo '$array'.' es del tipo '. mostrarTipo($array). "<br>";
echo '$cadena'.' es del tipo '. mostrarTipo($cadena). "<br>";
echo '$entero'.' es del tipo '. mostrarTipo($entero). "<br>";
echo '$verdad'.' es del tipo '. mostrarTipo($verdad). "<br>";

function mostrarTipo($variable){
    
    return gettype($variable);
    
}


?>