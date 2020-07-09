<?php

/* conexion bbdd
 */
$host = 'localhost';
$user = 'root';
$password = "";
$database = "phpmysql";

$conexion = mysqli_connect($host, $user, $password, $database);

if(mysqli_errno($conexion)){
    echo 'problema al conectar: ' . mysqli_errno($conexion);
}else{
    echo 'conexion exitosa';
}

mysqli_query($conexion, "set names 'utf-8'");

$query = "select * from notas";

$notas = mysqli_query($conexion, $query);
var_dump($notas);
foreach ($notas as $nota){
    echo "titulo: " . $nota['titulo'] . "<br>";
}

$query = "insert into notas values(null,'nota desde php','nota de php','greeen')";
$result = mysqli_query($conexion, $query);

if($result){
    echo 'datos guardados';
}else{
    echo 'problema al insertar'. mysqli_errno($conexion);
}
