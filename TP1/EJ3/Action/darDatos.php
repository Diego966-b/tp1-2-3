<?php
function darDatos ()
{
    $colDatos = array ();
    if (($_GET["nombre"] <> "") && ($_GET["apellido"] <> "") && ($_GET["edad"] <> "") && ($_GET["direccion"] <> ""))
    {
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $edad = $_GET["edad"];
        $direccion = $_GET["direccion"];
        $colDatos = ["nombre" => $nombre, "apellido" => $apellido, "edad" => $edad, "direccion" => $direccion];
    }
    return $colDatos;
}
?>