<!DOCTYPE html>

<html>
    <head>
        <title>validacion formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Validar formulario</h1>
        <?php
        if(isset($_GET['error']) && $_GET['error'] != ""){
            $error = $_GET['error'];
             echo "<strong style='color:red'>$error</strong>";
            
        }
        ?>
        <form method="post" action="procesarformulario.php">
            
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+" /><br/>
            
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"  /><br/>
            
            <label for="edad">Edad</label>
            <input type="text" name="edad" required="required" pattern="[0-9]{2}" /><br/>
            
            <label for="email">Email</label>
            <input type="email" name="email" required="required" /><br/>
            
            <label for="password">Password</label>
            <input type="password" name="password" /><br/>
            
            <input type="submit" value="enviar"/>
                
        </form> 
    </body>
</html>