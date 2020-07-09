<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    
    //var_dump($nombre); die();
    
    $errores = array();

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/0-9/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "nombre no valido";
    }
    
    if(count($errores) == 0){
        $sql = "insert into categorias values(null,'$nombre')";
        
        $guardar = mysqli_query($db, $sql);
        //var_dump($db);die();        
    }
}

header('location: index.php');
    

