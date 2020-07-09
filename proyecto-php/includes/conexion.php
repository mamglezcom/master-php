<?php

$host = 'localhost';
$user = 'root';
$password = '';
$puerto = '3308';
$database = 'blog_master';

$db = new mysqli($host, $user, $password, $database,$puerto);

if($db->connect_error){
    echo 'error en la conexion'.$db->connect_error;
    die("error en la conexion");
}

if(!isset($_SESSION)){
    session_start();
}
?>