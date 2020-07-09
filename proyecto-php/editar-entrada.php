<?php require_once 'includes/redireccion.php'; ?>
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
<?php include_once 'includes/lateral.php';?>

<!-- caja principal -->
<div id="principal">
    <h1>Editar entrada</h1>
    <p>Edita entrada <?=$entrada_actual['titulo'] ?></p><br/>
    <form method="post" action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>">
        
        <label for="titulo">Titulo de la categoria</label>
        <input type="text" name="titulo" value="<?=$entrada_actual['titulo'] ?>">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo') : ''; ?>
        
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"><?=$entrada_actual['descripcion'] ?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion') : ''; ?>
        
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                    <option value="<?= $categoria['id'] ?>"<?=($categoria['id'] == $entrada_actual['categoria_id']) ? "selected='selected'" : ''; ?> ><?=$categoria['nombre'] ?></option>
            <?php
                    endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'categoria') : ''; ?>
        <input type="submit" value="guardar" />
    </form>
    <?php borrarErrores(); ?>
</div>

<?php include_once 'includes/pie.php';?>