<?php require_once 'conexion.php';?>
<?php include_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <!-- cabecera -->
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">Blog de Videojuegos</a>
            </div>
        <!-- menu -->
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                        <li><a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></li>
                <?php 
                        endwhile; 
                    endif;
                ?>
                <li><a href="index.php">Sobre nos</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
        </header>
        <div id="contenedor">