<?php
include_once("../Action/darDatos.php");
if ($_POST)
{
    $colDatos = darDatos();
    $titulo = $colDatos["titulo"];
    $actores = $colDatos["actores"];
    $director = $colDatos["director"];
    $guion = $colDatos["guion"];
    $produccion = $colDatos["produccion"];
    $anio = $colDatos["anio"];
    $nacionalidad = $colDatos["nacionalidad"];
    $genero = $colDatos["genero"];
    $duracion = $colDatos["duracion"];
    $restriccion = $colDatos["restriccionesEdad"];
    $ubicacionPortada = $colDatos["ubicacionPortada"];
    $sinopsis = $colDatos["sinopsis"];
}
else
{
    echo "No recibi datos";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cinem@s validation</title>
</head>

<body>
    <div class="container">
        <h1>La pelicula introducida es: </h1>
        <?php
        echo "<p><span>Titulo:</span> $titulo</p>";
        echo "<p><span>Actores:</span> $actores</p>";
        echo "<p><span>Director:</span> $director</p>";
        echo "<p><span>Guion:</span> $guion</p>";
        echo "<p><span>Produccion:</span> $produccion</p>";
        echo "<p><span>A&ntilde;o:</span> $anio</p>";
        echo "<p><span>Nacionalidad:</span> $nacionalidad</p>";
        echo "<p><span>Genero:</span> $genero</p>";
        echo "<p><span>Duracion:</span> $duracion</p>";
        echo "<p><span>Restriccion:</span> $restriccion</p>";
        echo "<p><span>Sinopsis:</span> $sinopsis</p>";
        echo "<p><span>Portada:</span></p>";
        echo "<img src='$ubicacionPortada.'>";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
    <style>
        body{
            margin: 0;
        }

        .container{
            background-color: rgb(223,240,216);
            color: rgb(70,136,71);
        }
        span{
            font-weight: bold;
        }
        h1{
            color: blue;
        }
    </style>
</body>
</html>