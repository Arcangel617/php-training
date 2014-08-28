<?php

function factorial($num)
{
    $resultado =0;
    
    for ($index = $num; $index >= 1; $index--) {
        $resultado = $resultado + $index;
    }
    
    return $resultado;
}

echo "Resultado: ".factorial(10);


?>
