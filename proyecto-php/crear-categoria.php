<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php';?>
<?php require_once 'includes/redireccion.php'; ?>



<!-- caja principal -->
<div id="principal">
    <h1>Crear categorias</h1>
    <p>Añade nuevas categorias al blog</p><br/>
    <form method="post" action="guardar-categoria.php">
        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre">
        <input type="submit" value="guardar" />
    </form>
</div>



<?php include_once 'includes/pie.php';?>