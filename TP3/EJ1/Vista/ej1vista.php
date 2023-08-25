<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej1</title>
</head>
<body>
    <form id="formulario" name="formulario" method="post" action="../Control/verifArchivo.php" enctype="multipart/form-data">
        <p>Ingrese un archivo .pdf o .doc</p>
        <input type="file" name="miArchivo" id="miArchivo" accept=".doc, .pdf">
        <input type="submit" value="enviar">
    </form>
</body>
</html>