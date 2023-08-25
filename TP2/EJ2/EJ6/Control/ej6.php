<?php
if (($_GET["nombre"] <> "") && ($_GET["apellido"] <> "") && ($_GET["edad"] <> "") && ($_GET["direccion"] <> "") && ($_GET["nivelEstudios"] <> "") && ($_GET["sexo"] <> ""))
{
    $cantDeportes = 0;
    $deportesPracticados = array (
        0 => "futbol",
        1 => "basket",
        2 => "tennis",
        3 => "voley" 
    );

    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $edad = $_GET["edad"];
    $direccion = $_GET["direccion"];
    $sexo = $_GET["sexo"];
    $nivelEstudios = $_GET["nivelEstudios"];
    
    foreach ($deportesPracticados as $deporte)
    {
        if (isset($_GET[$deporte]))
        {
            $cantDeportes++;
        }
    }

    if ($edad >= 18)
    {
        echo "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad. " años y vivo en ".$direccion." y soy mayor de edad<br>";
    }
    else
    {
        echo "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad. " años y vivo en ".$direccion;
    } 
    echo "Mi sexo es: ".$sexo."<br>";
    echo "Mis nivel de estudios es: ".$nivelEstudios."<br>";
    echo "Practico ".$cantDeportes. " deportes ";
}
else
{
    echo "No recibi datos";
}

?>

<html>
    <head>
        <title>ej6</title>
    </head>
    <body>
        <br>
        <a href="../Vista/ej6Vista.php">Volver</a>
    </body>
</html>