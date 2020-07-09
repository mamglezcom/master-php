<?php

// sacar todos los numeros pares entre 1 y 100
$cont = 0;
for($numero = 1; $numero <=100;$numero++){
    
    if($numero % 2 == 0){
        ++$cont;
        echo "$cont: " . "$numero<br>";
        
        
    }
    
}
echo "encontrados $cont numeros pares";

