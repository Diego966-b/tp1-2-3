<html>
    <head>
        <title>ej8</title>
    </head>
    <body>
        <form id="formulario" name="formulario" method="get" action="../Control/ej8.php">
            Ingrese su edad: <input type="text" id="edad" name="edad">
            <br>
            Ingrese si es estudiante: 
            <br>
            <input type="radio" id="soyEstudiante" name="estudiante">
            <label for="soyEstudiante">Soy Estudiante</label>
            
            <br>

            <input type="radio" id="noSoyEstudiante" name="estudiante">
            <label for="noSoyEstudiante">No soy estudiante</label>
            <br>
            <input type="submit" value="enviar">
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="../Control/validar.js"></script>
    </body>
</html>