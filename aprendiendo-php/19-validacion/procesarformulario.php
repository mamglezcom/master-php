<?php
$error = 'valores incompletos';

if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) 
        && !empty($_POST['email']) && !empty($_POST['password'])){
    echo 'entro if';
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // TODO validacion de campos
}else{
    echo 'entro else';
    header("location:index.php?error=$error");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if($error == 'ok'): ?>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <p><?=$password?></p>
            
        <?php endif;?>
    </body>
</html>