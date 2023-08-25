<?php
include_once("../Action/calcHorasSemanales.php");
$colHorarios = calcHorasSemanales ();
if ($colHorarios <> "")
{
    echo "Cantidad total de horas semanales: ".array_sum($colHorarios);
    echo "<br>";
}
else
{
    echo "No recibi datos <br>";
}

?>

<html>
    <head>
        <title>ej2</title>
    </head>
    <body>
        <a href="../Vista/ej2.php">Volver</a>
    </body>
</html>
