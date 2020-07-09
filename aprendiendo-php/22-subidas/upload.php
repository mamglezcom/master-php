<?php



if($_FILES['archivo']){
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    
    if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
        
        if(!is_dir('images')){
            mkdir('images',0777);
        }
        
        move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
        echo 'imagen subida con exito';
        header('Refresh: 3; url=index.php');
        
    }else{
        echo "no es un formato valido de imagen (jpg, jpeg, png, gif)";
        header('Refresh: 3; url=index.php');
    }
    
}


?>
