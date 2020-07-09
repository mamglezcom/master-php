<?php

/* imprimir los cuadrados de los primeros 40 numeros naturales
    usar bucle while
*/

$contador = 1;
while($contador <=40){
    
    echo 'el cuadrado de '. $contador . ' es ' . '<strong>' . ($contador * $contador) . '</strong><br>';
    $contador++;
}