<?php
if ((!empty($_GET["edad"])) && (!empty($_GET["estudiante"])))
{
    $precio = 300;
    $edad = $_GET["edad"];
    $estudiante = $_GET["estudiante"];
    if ($estudiante == "soyEstudiante")
    {
        $precio = 160;
        if ($edad < 12)
        {
            $precio = 160;
        }
        else if ($edad >= 12)
        {
            $precio = 180;
        }
    }
    else if ($edad < 12)
    {
        $precio = 160;
    }
    echo "La entrada le cuesta $ ".$precio;
}
else
{
    echo "No recibi datos";
}
?>
<html>
    <head>
        <title>ej8</title>
    </head>
    <body>
        <br>
        <a href="../Vista/ej8Vista.php">Volver</a>
    </body>
</html>