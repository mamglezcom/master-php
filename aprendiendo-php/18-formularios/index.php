<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title></title>
    </head>
    <body>
        <h1>Formulario</h1>
        
        <form method="post" action="" enctype="multipart/form-data" >
            <p>Nombre: <input type="text" name="nombre" /></p>
            <p>Apellido: <input type="text" name="apellido"/></p>
            <p>Pincha: <input type="button" value="boton" /></p>
            <p>Hombre: <input type="checkbox" name="sexo" value="hombre" />
               Mujer: <input type="checkbox" name="sexo" value="mujer" /> </p>
            <p>Continente: <input type="radio" name="continente" value="europa" />europa
                           <input type="radio" name="continente" value="asia" />asia</p>
            <p>Comentario: <br/><textarea>comentario</textarea></p>
            <p><select name="peliculas">
                <option value="spider">spider</option>
                <option value="bataman">bataman</option>
                </select></p>
                       
            <input type="submit" value="enviar" />
        </form>
    </body>
    
</html>