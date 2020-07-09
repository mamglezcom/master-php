<!DOCTYPE html>
<html>
    <head>
        <title>subir archivos</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>subir archivos con php</h1>
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <input type="file" name="archivo" />
            <input type="submit" value="enviar"/>
        </form>
        
        <h1>listado de imagenes</h1>
        <?php
        $gestor = opendir('./images');
        if($gestor){
            while(($image = readdir($gestor)) !== false){
                if($image != '.' && $image != '..'){
                    echo "<img src='images/$image' width='200px' /><br/>";
                }
            }
        }
        ?>
    </body>
</html>
