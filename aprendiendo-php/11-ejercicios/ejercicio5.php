<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio 4</title>
    </head>
    <body>
        <form method="get" action="ejercicio5.php">
            <label>Escribe primer numero</label>
            <input type="text" name="uno"/>
            <br>
            <label>Escribe segundo numero</label>
            <input type="text" name="dos"/>
            <br>
            <input type="submit" value="enviar"/>
        </form>
    </body>
    
</html>
<?php

/* mostrar todos los numeros entre dos que nos lleguen por GET 
 */

if(isset($_GET['uno']) && isset($_GET['dos'])){
    $uno = $_GET['uno'];
    $dos = $_GET['dos'];
    if($uno != "" && $dos != ""){
        if($uno < $dos){
            for($i = ++$uno;$i < $dos; $i++){
                echo $i.'<br>';
            }
        }else{
            for($i = --$uno;$i > $dos; $i--){
                echo $i.'<br>';
            }
        }
    }
    
}
?>
