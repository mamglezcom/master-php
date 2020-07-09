<?php

/* locales y globales
 */

//global
$texto = "hola como estamos";

function holaMundo(){
    global $texto;
    echo $texto;
}
holaMundo();

//funciones variables

function buenosDias(){
    return "buenos dias";
}
function buenasTardes(){
    return "buenas tardes";
}
function buenasNoches(){
    return "buenas noches";
}

$horario = "buenasNoches";
echo $horario;
?>