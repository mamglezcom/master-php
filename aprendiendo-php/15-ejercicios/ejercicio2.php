<?php

/* añadir valores a un array mientras su longitud sea < 120, mostrar en pantalla
 */

$array = [];
for($i = 1; $i<120;$i++){
    array_push($array, rand());
}
for($i = 0; $i < sizeof($array);$i++){
    echo ($i+1).": ".$array[$i]."<br>";
}

?>