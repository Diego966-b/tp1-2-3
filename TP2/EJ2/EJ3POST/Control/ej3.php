<?php
include_once("../Action/darDatos.php");
$colDatos = darDatos();
if ($colDatos <> "")
{
    $nombre = $colDatos ["nombre"];
    $apellido = $colDatos ["apellido"];
    $edad = $colDatos ["edad"];
    $direccion = $colDatos ["direccion"];
    echo "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad. " años y vivo en ".$direccion;
}
else
{
    echo "No recibi datos";
}
?>
<html>
    <head>
        <title>ej3.php</title>
    </head>
    <body>
        <br>
        <a href="../Vista/ej3Vista.php">Volver</a>
    </body>
</html>