<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php 
    $categoria_actual = conseguirCategoria($db,$_GET['id']);
    if(!isset($categoria_actual['id'])){
        header('location: index.php');
    }
?>
<?php include_once 'includes/cabecera.php'; ?>

    <!-- sidebar -->
    <?php include_once 'includes/lateral.php';?>

    <!-- contenido -->
    <div id="principal">
        
        <h1>Entradas de <?=$categoria_actual['nombre'] ?></h1>
        
        <?php
            $entradas = conseguirEntradas($db,null,$_GET['id']);
            if(!empty($entradas)):
                while($entrada = mysqli_fetch_assoc($entradas)):
        ?>
                    <article class="entrada">
                        <a href="entrada.php?id=<?=$entrada['id'] ?>">
                            <h2><?=$entrada['titulo'] ?></h2>
                            <span class="fecha"><?=$entrada['categoria']." | ".$entrada['fecha'] ?></span>
                            <p><?= substr($entrada['descripcion'], 0, 180)."..." ?></p>
                        </a>
                    </article>
        <?php
                endwhile;
            else:
        ?>
        <div class="alerta">no hay entradas en esta categoria</div>
        <?php endif; ?>

    </div>
</div>

<div class="clearfix"></div>
<!-- pie -->
<?php include_once 'includes/pie.php';?>
