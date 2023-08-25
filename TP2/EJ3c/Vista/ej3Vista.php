<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ej3c</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../Librerias/Bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex justify-content-center bg-secondary">
    <div class="position-absolute z-2">
        <form class=" p-3" name="formulario" id="formulario" method="post" action="../Control/verificaPass.php"> <!-- rounded-0 border border-secondary border-5 -->
        <h2>Member Login</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
            </svg>
            <input type="text" id="usuario" name="usuario" placeholder="Username">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
            </svg>
            <input type="password" id="contrasena" name="contrasena" placeholder="Password">
            <br><br>
            <input type="submit" value="Login" class="btn btn-success">
            <!--  onclick="return validacion()" -->
        </form>
    </div>
</div>
    <!-- jquery y jquery validation -->
    <script src="../../../Librerias/jquery-3.7.0.min.js"></script>
    <script src="../../../Librerias/Jquery Validation/dist/jquery.validate.min.js"></script>
    <script src="../Control/validar.js"></script>
</body>
</html>