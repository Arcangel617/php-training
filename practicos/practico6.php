<html>
    <head>
        <meta charset="UTF-8">
        <title>Práctico 6</title>
    </head>
    <body>
        <ol>
            <li value="1">Explique qué es el ámbito o alcance de una variable. Una variable que está definida dentro de una función, cuál es su alcance?</li>
            <li>¿Se puede invocar a una función dentro de un string encerrado dentro de comillas dobles? Por ejemplo, en el siguiente código.<br>
                $mensaje = "El resultado de la suma es suma(8,9)";<br>
                ¿Funciona la invocación a suma()?, si/no explique su elección.</li>
            <li>Si la función no recibe parámetros, ¿podemos obviar los paréntesis en su definición?</li>
            <li>¿A través de qué funciones se retornan y reciben varios valores de una función? </li>
            <li>
                <fieldset>
                    <legend>Dado el siguiente arreglo</legend>
                    $datos = array('juan','carlos','pepe','charlie','luis');<br>
                </fieldset>
                <p>Realizar una función que se llame tabular, que acepte como parámetro el arreglo presente los datos de los mismos en formato tabular (&#60;table&#62;&#60;/table&#62;);</p>
                <p>Definiciones:</p>
                <p>Interface de la función: tabular($datos)</p>
                <fieldset>
                    <legend>Ejemplo Salida HTML para 2 elementos (usted debe mostrar todos los elementos del arreglo)</legend>
                    &#60;table&#62;<br>
                    &#60;tr&#62;
                    &#60;td&#62;
                    Valor 1
                    &#60;/td&#62;
                    &#60;/tr&#62;<br>	
                    &#60;tr&#62;
                    &#60;td&#62;
                    Valor 2
                    &#60;/td&#62;
                    &#60;/tr&#62;<br>
                    &#60;/table&#62;<br>
                </fieldset>
                <p>En el browser debe verse como una grilla</p> 
                <p>(puede resaltar los bordes de la grilla mediante border)</p>
            </li>
            <li>Explique qué significan los valores negativos y positivos que dan como resultado la aplicación de la función strcmp() si los 2 parámetros de entrada no son iguales.</li>

    </body>
</html>