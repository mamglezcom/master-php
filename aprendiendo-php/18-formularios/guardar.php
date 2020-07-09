<?php

/* recoger datos formulario
 */

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo '<h1>Nombre: '.$_POST['titulo'].'</h1>';
    echo '<h1>Descripcion: '.$_POST['descripcion'].'</h1>';
}

?>