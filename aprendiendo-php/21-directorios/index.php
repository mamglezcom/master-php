<?php

/* directorios
 */
if(!is_dir('micarpeta')){
  mkdir('micarpeta',0777) or die('no se pudo crear la carpeta');
  echo 'se creo correctamente';
}else{
    echo 'ya existe la carpeta';
}

rmdir('micarpeta');

?>

