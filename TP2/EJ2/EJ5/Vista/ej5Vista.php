<html>
    <head>
        <title>ej5.html</title>
        <link type="text/css" rel="stylesheet" href="ej4.css">
    </head>
    <body>
        <form id="formulario" name="formulario" method="get" action="../Control/ej5.php">
            <p>Nombre: </p><input class="espacioForm" type="text" id="nombre" name="nombre">
            <br>
            <p>Apellido: </p><input class="espacioForm" type="text" id="apellido" name="apellido">
            <br>
            <p>Edad: </p><input class="espacioForm" type="text" id="edad" name="edad">
            <br>
            <p>Direcci&oacute;n: </p><input class="espacioForm" type="text" id="direccion" name="direccion">
            <br>
            <p>Seleccione su sexo:</p>
            <input type="radio" id="sexo" name="sexo" value="hombre">Hombre
            <br>
            <input type="radio" id="sexo" name="sexo" value="mujer">Mujer
            <p>Seleccione su nivel de educacion:</p>
            <input type="radio" id="estudiosNinguno" name="nivelEstudios" value="ninguno">No tiene estudios
            <br>
            <input type="radio" id="estudiosPrimarios" name="nivelEstudios" value="primarios">Estudios primarios
            <br>
            <input type="radio" id="estudiosSecundarios" name="nivelEstudios" value="secundarios">Estudios secundarios
            <br>
            <input type="submit" value="Enviar">
        </form> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="../Control/validar.js"></script>
    </body>
</html>