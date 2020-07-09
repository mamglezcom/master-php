<?php

/* una funcion que valide email con filter_var y devolver resultado
 * recoger variable con GET y validar
 * mostrar resultado
 */

function validarEmail($email){
    $status = 'no valido';
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = 'valido';
    }
    return $status;
            
}

if(isset($_GET['email'])){
    echo validarEmail($_GET["email"]);
}else{
    echo "pasa un email por GET...";
}

?>