<?php
require_once 'includes/conexion.php';


if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id = $_GET['id']; // 8
    $usuario_id = $_SESSION['usuario']['id']; // 10
  
    $sql = "delete from entradas where usuario_id = $usuario_id and id = $entrada_id";
    mysqli_query($db, $sql);
}
header('location: index.php');