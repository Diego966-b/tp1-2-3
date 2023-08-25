
<html>
    <head>
        <title>ej4</title>
        <link type="text/css" rel="stylesheet" href="ej4.css">
    </head>
    <body>
        <form id="formulario" name="formulario" method="get" action="../Control/ej4.php">
            <p>Nombre: </p><input class="espacioForm" type="text" id="nombre" name="nombre">
            <br>
            <p>Apellido: </p><input class="espacioForm" type="text" id="apellido" name="apellido">
            <br>
            <p>Edad: </p><input class="espacioForm" type="text" id="edad" name="edad">
            <br>
            <p>Direcci&oacute;n: </p><input class="espacioForm" type="text" id="direccion" name="direccion">
            <br>
            <input type="submit" value="Enviar">
        </form> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="../Control/validar.js"></script>
    </body>
</html>