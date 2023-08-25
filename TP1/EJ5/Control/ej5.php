<?php
if (($_GET["nombre"] <> "") && ($_GET["apellido"] <> "") && ($_GET["edad"] <> "") && ($_GET["direccion"] <> "") && ($_GET["nivelEstudios"] <> "") && ($_GET["sexo"] <> ""))
{
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $edad = $_GET["edad"];
    $direccion = $_GET["direccion"];
    if ($edad >= 18)
    {
        echo "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad. " años y vivo en ".$direccion." y soy mayor de edad<br>";
        echo "Mi sexo es: ".$_GET["sexo"]."<br>";
        echo "Mis nivel de estudios es: ".$_GET["nivelEstudios"];
    }
    else
    {
        echo "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad. " años y vivo en ".$direccion;
    } 
}
else
{
    echo "No recibi datos";
}
?>

<html>
    <head>
        <title>ej5</title>
    </head>
    <body>
        <br>
        <a href="../Vista/ej5Vista.php">Volver</a>
    </body>
</html>