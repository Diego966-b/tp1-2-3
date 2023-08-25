<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ej3c</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
    <div>
        <form name="formulario" id="formulario" method="post" action="../Control/verificaPass.php">
        <h2>Member Login</h2>
            <input type="text" id="usuario" name="usuario" placeholder="Username">
            <br>
            <input type="password" id="contrasena" name="contrasena" placeholder="Password">
            <br><br>
            <input type="submit" value="Login" >
        </form>
    </div>
</div>
    <!-- jquery y jquery validation -->
    <script src="../../../Librerias/jquery-3.7.0.min.js"></script>
    <script src="../../../Librerias/Jquery Validation/dist/jquery.validate.min.js"></script>
    <script src="../Control/validar.js"></script>
</body>
</html>