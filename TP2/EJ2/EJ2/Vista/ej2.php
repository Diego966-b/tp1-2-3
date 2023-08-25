<?php

?>
<html>
    <head>
        <title>ej2</title>
    </head>
    <body>
        <h2>Horarios de PWD</h2>
        <form id="formulario" name="formulario" method="get" action="../Control/horasMateria.php">
            <p>Ingrese la cantidad de horas que cursa PWD por dia</p>
            Lunes: <input type="text" name="lunes" id="lunes">
            <br>
            Martes: <input type="text" name="martes" id="martes">
            <br>
            Miercoles: <input type="text" name="miercoles" id="miercoles">
            <br>
            Jueves: <input type="text" name="jueves" id="jueves">
            <br>
            Viernes: <input type="text" name="viernes" id="viernes">
            <br>
            <input type="submit" value="enviar">
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="../Control/validar.js"></script>
    </body>
</html>