<aside id="sidebar">
    
    <div id="buscador" class="bloque">
            <h3>Buscar</h3>
            <form method="post" action="buscar.php">
                
                <label for="busqueda">Busqueda</label>
                <input type="texto" name="busqueda" />

                <input type="submit" value="buscar"/>
            </form>
        </div>
    
    <?php if(isset($_SESSION['usuario'])): ?>
    <div id="usuario-logueado" class="bloque">
        <h3>Bienvenido, <?=$_SESSION['usuario']['nombre']. " " . $_SESSION['usuario']['apellidos']; ?></h3>
        <!-- botones -->
        <a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a>
        <a href="crear-categoria.php" class="boton">Crear categoria</a>
        <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
        <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesion</a>
    </div>
    <?php endif; ?>
    
    <?php if(!isset($_SESSION['usuario'])): ?> 
        <div id="login" class="bloque">
            <h3>Identificar</h3>
            <?php if(isset($_SESSION['error_login'])): ?>
                <div class="alerta alerta-error">
                    <?=$_SESSION['error_login'] ?>
                </div>
            <?php endif; ?>
            <form method="post" action="login.php">
                <label for="email">Email</label>
                <input type="email" name="email" />

                <label for="password">Contraseña</label>
                <input type="password" name="password"/>

                <input type="submit" value="entrar"/>
            </form>
        </div>

        <div id="register" class="bloque">
            <h3>Registrarte</h3>
            <!-- mostrar errores -->
            <?php if(isset($_SESSION['completado'])): ?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['completado'] ?>
                </div>
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>

            <form method="post" action="registro.php">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password"/>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'password') : ''; ?>

                <input type="submit" name="submit" value="registrar"/>
            </form>
            <?php borrarErrores(); ?>
        </div>
    <?php endif; ?>
</aside>