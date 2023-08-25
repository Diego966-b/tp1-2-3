<html>
    <head>
        <link href="../Vista/ej7.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <form id="form" name="form" method="get" action="../Control/ej7.php">
            <input type="text" name="num1" id="num1" placeholder="Número 1" class="espacioForm">
            <br>
            <input type="text" name="num2" id="num2" placeholder="Número 2" class="espacioForm">
            <br>
            <select name="operacion" id="operacion">
                <option name="suma" id="suma">Suma</option>
                <option name="resta" id="resta">Resta</option>
                <option name="multiplicacion" id="multiplicacion">Multiplicacion</option>
            </select>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>