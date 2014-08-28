<?php

function factorial($num) {
    $resultado = 1;

    for ($index = $num; $index >= 1; $index--) {
        $resultado = $resultado * $index;
    }

    return $resultado;
}

echo "Resultado: " . factorial(10);
?>
