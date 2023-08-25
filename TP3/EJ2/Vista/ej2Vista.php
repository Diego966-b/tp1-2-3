<?php

?>
<!-- Ejercicio 2 – Crear un formulario que permita subir un archivo. En el servidor se deberá controlar 
que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su 
contenido en un textarea.
(OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
</head>
<body>
    <form id="formulario" name="formulario" method="post" action="../Control/ej2.php" enctype="multipart/form-data">
        <p>Ingrese un archivo .txt</p>
        <input type="file" name="miArchivo" id="miArchivo" accept=".txt">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
