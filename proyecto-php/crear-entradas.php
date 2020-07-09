<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php';?>
<?php require_once 'includes/redireccion.php'; ?>



<!-- caja principal -->
<div id="principal">
    <h1>Crear categorias</h1>
    <p>Añade nuevas entradas al blog</p><br/>
    <form method="post" action="guardar-entrada.php">
        
        <label for="titulo">Titulo de la categoria</label>
        <input type="text" name="titulo">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo') : ''; ?>
        
        
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion') : ''; ?>
        
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                    <option value="<?= $categoria['id'] ?>"><?=$categoria['nombre'] ?></option>
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