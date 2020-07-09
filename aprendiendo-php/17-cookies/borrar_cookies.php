<?php

/* borrar cookies
 */

//hay que caducarla

if($_COOKIE['nombre']){
    setcookie('nombre','', time()-10000);
}
