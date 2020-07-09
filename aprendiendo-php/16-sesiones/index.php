<?php

/* 
 * sesiones
 */
session_start();
$variable_normal = "soy una cadena";

$_SESSION['variable_persistente'] = "soy sesion activa";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];

?>