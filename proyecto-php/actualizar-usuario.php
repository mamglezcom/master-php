<?php

if(isset($_POST)){
    
    include_once 'includes/conexion.php';
    
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    
    $errores = array();

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/0-9/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "nombre no valido";
    }
    
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/0-9/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "apellidos no valido";
    }
    
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "email no valido";
    }
    
    $guardar_usuario = false;
    if(count($errores) == 0){
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;
        
        // comprobar si email ya existe
        $sql = "select id, email from usuarios where email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);
        if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
                //actualizar en bbdd
            $usuario = $_SESSION['usuario']['id'];
            $sql = "update usuarios set nombre = '$nombre', apellidos = '$apellidos', email = '$email' where id = '$usuario'";
            $guardar = mysqli_query($db, $sql);
            if($guardar){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = 'actualizarion se ha completado con exito';
            }else{
                $_SESSION['errores']['general'] = 'fallo al guardar el datos';
            }
        }else{
            $_SESSION['errores']['general'] = 'el usuario ya exite';
        }
        
        
    }else{
        $_SESSION['errores'] = $errores;
        header('location: mis-datos.php');
    }
}
header('location: mis-datos.php');
?>