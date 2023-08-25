<?php
    function darDatos ()
    {
        $col = array ();
        $titulo = $_POST["titulo"];
        $actores = $_POST["actores"];
        $director = $_POST["director"];
        $guion = $_POST["guion"];
        $produccion = $_POST["produccion"];
        $anio = $_POST["anio"];
        $nacionalidad = $_POST["nacionalidad"];
        $genero = $_POST["genero"];
        $duracion = $_POST["duracion"];
        $restriccionesEdad = $_POST["restriccionesEdad"];
        $col = ["titulo" => $titulo, "actores" => $actores, "director" => $director, "guion" => $guion, "produccion" => $produccion,
        "anio" => $anio, "nacionalidad" => $nacionalidad, "genero" => $genero, "duracion" => $duracion, "restriccionesEdad" => $restriccionesEdad];
        return $col;
    }
?>