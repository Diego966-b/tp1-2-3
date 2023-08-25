<?php
include_once("../Action/verNumero.php");
if ($_GET ["numeroForm"] <> "")
{
    $frase = verNumero();
    echo $frase;
}
else
{
    echo "No se recibieron datos <br>";
}
?>
<html>
    <head>
        <title>verNumero.php</title>
    </head>
    <body>
        <br>
        <a href = "../Vista/ej1Vista.php">Volver</a>
    </body>
</html>
