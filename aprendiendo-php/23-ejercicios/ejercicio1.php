<?php

/* crear sesion que aumente valor en uno o disminuya uno en funcion parametro GET counter esta a 1 o a 0
 */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
}

if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['numero']--;
}





?>
<h3>el numero de sesion es : <?=$_SESSION['numero']?></h3>
<a href="ejercicio1.php?counter=1">AUMENTAR</a><br>
<a href="ejercicio1.php?counter=0">DISMINUIR</a>