<?php

/* 
 * cookies
 */

setcookie('nombre', 'miguel');
setcookie('unyear','valor de la cookie', time()+60*60*24*365);

var_dump($_COOKIE);

?>

<a href="ver_cookies.php">ver cookies</a>