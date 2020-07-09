<?php

/* crear array con contenido de la tabla:
 * accion   aventura    deportes
 * gta      assasins    fifa
 * cod      crash       pes
 * pug      prince      motogp
 * 
 * cada columna en un fichero separado (include)
 */

$tabla = array(
    'ACCION' => array('GTA','COD','PUG'),
    'AVENTURA' => array('ASSASINS', 'CRASH', 'PRINCE'),
    'DEPORTES' => array('FIFA','PES','MOTOGP')
);

var_dump($tabla);
        
?>

<table>
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
</table>