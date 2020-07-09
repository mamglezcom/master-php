<?php 
    if(!isset($_POST['busqueda'])){
        header('location: index.php');
    }    
    
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php';?>
    
    <!-- contenido -->
    <div id="principal">
        
        <h1>Buscando: <?=$_POST['busqueda'] ?></h1>
        
        <?php
            $entradas = conseguirEntradas($db, null, null, $_POST['busqueda']);
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
