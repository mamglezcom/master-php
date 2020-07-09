<?php

/* 
 * imprimir todas las tablas multiplicar del 1 al 10 en una tabla HTML
 */

echo '<table border=\'1\'><tr>';
for($i = 1; $i<=10;$i++){
    echo '<th>Tabla del '.$i.'</th>';
}
echo '</tr>';
echo '<tr>';
for($j=1;$j<=10;$j++){
    echo '<td>';
    for($k = 1; $k <= 10;$k++){
        echo "$j x $k = ". $j * $k.'<br>';
    }
    echo '</td>';
}
echo '</td></tr>';
echo '</tr></table>';
?>

