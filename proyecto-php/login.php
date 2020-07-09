<?php
// iniciar sesion y conexion a bbdd
require_once 'includes/conexion.php';

//recoger datos del formulario
if(isset($_POST)){
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    //consulta comprobar credenciales
    $sql = "select * from usuarios where email = '$email'";
    $login = mysqli_query($db, $sql);
    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        //comprobar password
        $verify = password_verify($password, $usuario['password']);
        if($verify){
            $_SESSION['usuario'] = $usuario;
            
        }else{
            $_SESSION['error_login'] = "login incorrecto";
        }
    }else{
        //mensaje error
        $_SESSION['error_login'] = "login incorrecto";
    }
    
}

header('location: index.php');

?>

