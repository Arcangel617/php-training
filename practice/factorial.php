<?php
if (isset($_GET['numero'])) {
    $num = 0;
} else {
    $num = $_GET['numero'];
}
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <?php

    function factorial($num) {
        $resultado = 1;

        for ($index = $num; $index >= 1; $index--) {
            $resultado = $resultado * $index;
        }

        return $resultado;
    }
    
    ?>
    <body>


        <form method="get" action="factorial.php">
            <label>Factorial de </label><input type="text" name="numero" size="3"><input type="submit" value="Calcular">
        </form>



    </body>
</html>
