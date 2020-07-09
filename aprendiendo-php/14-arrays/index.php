<?php

/*
 * arrays / matrices
 */

$array = [];
$array[] = "hola";
$array[] = "adios";
$array[] = "buenas";

$personas = array(
  'nombre' => 'miguel',
    'apellido' => 'martin'
);

foreach($array as $valor){
    echo $valor.'<br>';
    array_push($array, "saludo");
}
echo "<hr>";
for($i = 0; $i < sizeof($array); $i++){
    echo "<h3>$array[$i]</h3>";
}

echo "<hr>";
foreach($personas as $key => $valor){
    echo $key.": ". $valor."<br>";
}

?>
