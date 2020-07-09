<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php 
    $entrada_actual = conseguirEntrada($db,$_GET['id']);
    //var_dump($entrada_actual); die();
    if(!isset($entrada_actual)){
        header('location: index.php');
    }
?>
<?php include_once 'includes/cabecera.php'; ?>

<!-- sidebar -->
<?php include_once 'includes/lateral.php';?>

<!-- contenido -->
<div id="principal">

    <h1><?=$entrada_actual['titulo'] ?></h1>
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
        <h2><?=$entrada_actual['categoria'] ?></h2>
    </a>
    <h4><?=$entrada_actual['fecha'] ?> | <?=$entrada_actual['nombrecompleto'] ?></h4>
    <p><?=$entrada_actual['descripcion'] ?> </p>
    
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
        <a href="editar-entrada.php?id=<?=$entrada_actual['id'] ?>" class="boton boton-verde">Editar entrada</a>
        <a href="borrar-entrada.php?id=<?=$entrada_actual['id'] ?>" class="boton boton-rojo">Borrar entrada</a>
    <?php endif; ?>
</div>


<div class="clearfix"></div>
<!-- pie -->
<?php include_once 'includes/pie.php';?>
