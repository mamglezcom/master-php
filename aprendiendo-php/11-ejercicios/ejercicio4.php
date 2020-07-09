<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio 4</title>
    </head>
    <body>
        <form method="get" action="ejercicio4.php">
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

/* recoger dos numeros por GET y hacer operaciones basicas con ellos
 */
if(isset($_GET['uno']) && isset($_GET['dos'])){
    $uno = $_GET['uno'];
    $dos = $_GET['dos'];
    if($uno != "" && $dos != ""){
        echo 'la suma de '. $uno . ' y ' . $dos . ' es: ' . ($uno + $dos) . '<br>';
        echo 'la resta de '. $uno . ' y ' . $dos . ' es: ' . ($uno - $dos) . '<br>';
        echo 'la multiplicacion de '. $uno . ' y ' . $dos . ' es: ' . ($uno * $dos) . '<br>';
        echo 'la division de '. $uno . ' y ' . $dos . ' es: ' . ($uno / $dos) . '<br>';
        echo 'el resto de '. $uno . ' y ' . $dos . ' es: ' . ($uno % $dos) . '<br>';
    }
    
}

?>
