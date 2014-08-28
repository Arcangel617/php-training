<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Práctico 4</h2>
    <ol>
        <li value="1">
            <p>¿Qué tags me conviene usar para encerrar código php?</p>
            <p>Para poder encerrar codigo php es necesario utilizar los tags "&#60?php //codigo php ?&#62" </p>
        </li>
        <li>
            <p>Aparte del editor recomendado en el curso, ¿qué tipo de editor puedo utilizar para escribir código PHP?</p>
            <p>Se puede utilizar cualquier editor de texto plano. Ej: notepad, notepad++, gedit, kwrite, Sublime Text.</p>
        </li>
        <li>
            <p>¿Qué sentencias se utilizan para generar salida por pantalla?</p>
            <p>Se pueden utilizar la setencia echo y la setencia print.</p>
        </li>
        <li>
            <p>En el siguiente código:</p>
            <p>$a = '2';</p>
            <p>$a = '1' + $a;</p>
            <p>¿Qué tipo de dato tendría la variable $a y cuál sería su valor?</p>
            <p><strong>Respuesta:</strong></p>

            <p><fieldset>
                <legend>Código PHP</legend>
                <p>
                    &#60?php<br>
                    $a = '2';<br>
                    echo "Inicio:&#60br&#62 Valor de la variable \$a: $a -> Tipo de dato: " . gettype($a);<br>

                    $a = '1' + $a;<br>
                    echo "&#60br&#62Final:&#60br&#62Valor de la variable \$a: $a -> Tipo de dato: " . gettype($a);<br>
                    ?&#62

                </p>
            </fieldset>
            <fieldset>
                <legend>Salida:</legend>
                <p>
                    Inicio:<br>
                    Valor de la variable $a: 2 -> Tipo de dato: string<br>
                    Final:<br>
                    Valor de la variable $a: 3 -> Tipo de dato: integer<br>
                </p>
            </fieldset></p>
        </li>
        <li>
            <p>¿Qué significa que php está embebido en HTML?</p>
            <p>Significa que se puede escribir código php dentro del código html para agregar dinamismo a la página.</p>
        </li>
        <li>
            <p>¿Cuáles son las variables predefinidas de PHP para realizar el pasaje de parámetros de entrada?</p>
            <p>
            <ul>
                <li>$_POST</li>
                <li>$_GET</li>
                <li>$_REQUEST</li>
            </ul>
            </p>
        </li>
        <li>Explique brevemente de qué manera se puede recuperar el valor de las variables de entradas.</li>
        <li>Analizando las siguientes sentencias<br>
            $x = 0;<br>
            $x += 5;<br>

            y<br>

            $x = 0;<br>
            $x = $x + 5;<br>

            Podemos decir que<br>
            <ul>

                <li>La primera posee un error de sintaxis</li>
                <li>Son Equivalentes</li>	 
                <li>La segunda es la forma correcta de hacerlo</li>
                <li>No producen el mismo resultado</li>

            </ul>

            (Una Opción es la Correcta)</li>
        <li>Realizar una variante de Hello World donde se ingrese un parámetro de entrada via GET que se llame nombre, y que en vez de decir simplemente Hello World diga Hello y el nombre ingresado. Adjuntar el código del script en la respuesta.</li>
        <li>realizar una variante del script mostrado en clase en el cual el método a utilizar no sea GET ni POST sino REQUEST. Adjuntar el código del script en la respuesta.</li>
    </ol>
</body>
</html>