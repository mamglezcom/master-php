<?php

/* mostrar valor de las cookies con $_COOKIE
*/

if(isset($_COOKIE['nombre'])){
    echo $_COOKIE['nombre'];
}else{
    echo 'no se encontro la cookie nombre';
}

?>
<a href="borrar_cookies.php">borrar cookies</a>