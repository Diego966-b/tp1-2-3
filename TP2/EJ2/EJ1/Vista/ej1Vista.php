<?php

?>
<html>
    <head>
        <title>ej1</title>
    </head>
    <body>
        <form id="formulario" name="formulario" method="get" action="../Control/mostrarNumero.php">
            Numero: <input name="numeroForm" type="text" id="numeroForm"> 
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <!-- jquery y jquery validation -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="../Control/validar.js"></script>
    </body>
</html>