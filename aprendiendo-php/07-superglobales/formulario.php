<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>formulario php</title>
    </head>
    <body>
        <h1>Formulario php</h1>
        <form method="post" action="recibir.php">
            <p>
            <label>nombre</label>
            <input type="text" name="nombre" /> 
            </p>
            <p>
            <label>apellidos</label>
            <input type="text" name="apellidos" />
            </p>
            <input type="submit" value="enviar" />
        </form>
    </body>
</html>

<?php

?>
