<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];
    
    
    $errores = array();

    if(empty($titulo) ){
        $errores['titulo'] = "titulo vacio";
    }
    
    if(empty($descripcion) ){
        $errores['descripcion'] = "descripcion vacia ";
    }
    
    if(empty($categoria) || !is_numeric($categoria) ){
        $errores['categoria'] = "categoria no valida";
    }
    
    if(count($errores) == 0){
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];//16
            $usuario_id = $_SESSION['usuario']['id'];// 10
            $sql = "update entradas set titulo = '$titulo', descripcion = '$descripcion', categoria_id = $categoria where id = $entrada_id and usuario_id = $usuario_id ";
        }else{
            $sql = "insert into entradas values(null,'$usuario',$categoria,'$titulo','$descripcion',CURDATE())";
        }
        $guardar = mysqli_query($db, $sql);   
        header('location: index.php');
    }else{
        $_SESSION['errores_entrada'] = $errores;
        if(isset($_GET['editar'])){
            header('location: editar-entrada.php?id='.$_GET['editar']);
        }else{
            header('location: crear-entradas.php');
        }
        
    }
}


    
