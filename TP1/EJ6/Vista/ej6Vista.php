<html>
    <head>
        <title>ej6</title>
        <link type="text/css" rel="stylesheet" href="../Vista/ej6.css">
    </head>
    <body>
        <form id="form" name="form" method="get" action="../Control/ej6.php">
            <p>Nombre: </p><input class="espacioForm" type="text" id="nombre" name="nombre">
            <br>
            <p>Apellido: </p><input class="espacioForm" type="text" id="apellido" name="apellido">
            <br>
            <p>Edad: </p><input class="espacioForm" type="text" id="edad" name="edad">
            <br>
            <p>Direcci&oacute;n: </p><input class="espacioForm" type="text" id="direccion" name="direccion">
            <br>
            <p>Seleccione su sexo: </p>
            <br>
            <input type="radio" id="sexo" name="sexo" value="hombre">Hombre
            <br>
            <input type="radio" id="sexo" name="sexo" value="mujer">Mujer
            <br>
            <p>Seleccione su nivel de educacion:</p>
            <br>
            <input type="radio" id="estudiosNinguno" name="nivelEstudios" value="ninguno">No tiene estudios
            <br>
            <input type="radio" id="estudiosPrimarios" name="nivelEstudios" value="primarios">Estudios primarios
            <br>
            <input type="radio" id="estudiosSecundarios" name="nivelEstudios" value="secundarios">Estudios secundarios
            <br>
            <p>Seleccione que deportes practica: </p>
            <br>
            <input type="checkbox" id="futbol" name="futbol" value="futbol">Futbol 
            <br>
            <input type="checkbox" id="basket" name="basket" value="basket">Basket
            <br>
            <input type="checkbox" id="tennis" name="tennis" value="tennis">Tennis
            <br> 
            <input type="checkbox" id="voley" name="voley" value="voley">Voley
            <br>
            <input type="submit" value="Enviar">
        </form> 
    </body>
</html>