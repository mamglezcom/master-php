<?php

/* array con 8 numeros: recorrer mostrar, ordenar mostrar, mostrar longitud, buscar elemento
 */
$numeros = array(23,14,54,34,56,54,2,31);

echo "<h1>recorrer y mostrar</h1>";
echo mostrarArray($numeros);

sort($numeros);
echo "<h1>ordenar y mostrar</h1>";
echo mostrarArray($numeros);

echo "<h1>mostrar longitud</h1>";
echo count($numeros);

echo "<h1>buscar elemento y mostrarlo</h1>";
$busqueda = 54;
$search = array_search($busqueda, $numeros);
if(!empty($search)){
    echo "<h4>El numero buscado existe en el array en el indice $search</h4>";
    
}else{
    echo "<h4>No existe el numero en el array</h4>";
}


// funciones
function mostrarArray($array){
    $resultado = "";
    foreach($array as $valor){
        $resultado .= $valor."<br>";
    }
    return $resultado;
}
?>