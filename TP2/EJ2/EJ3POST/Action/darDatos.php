<?php
function darDatos ()
{
    $colDatos = array ();
    if (($_POST["nombre"] <> "") && ($_POST["apellido"] <> "") && ($_POST["edad"] <> "") && ($_POST["direccion"] <> ""))
    {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $direccion = $_POST["direccion"];
        $colDatos = ["nombre" => $nombre, "apellido" => $apellido, "edad" => $edad, "direccion" => $direccion];
    }
    return $colDatos;
}
?>