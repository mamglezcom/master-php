<?php

/* comprobar si una variable esta vacia, si esta vacia rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita
 */
$texto = "";

if(empty($texto)){
    $texto = strtolower("hello");
    echo "<b>".strtoupper($texto)."</b>";
}

?>
