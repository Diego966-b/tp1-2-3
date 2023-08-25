<?php
if (!empty($_POST["usuario"]) && (!empty($_POST["contrasena"])))
{
    $login = false;
    $usuarioIngresado = $_POST["usuario"];
    $contrasenaIngresada = $_POST["contrasena"];
    $usuariosRegistrados = array ("Diego546" => "123456789a", "abc145" => "defgqwe8");
    foreach ($usuariosRegistrados as $usuario => $contrasena)
    {
        if (($usuarioIngresado == $usuario) && ($contrasenaIngresada == $contrasena))
        {
            $login = true;
        }
    }
    if ($login)
    {
        echo "Bienvenido!";
    }
    else
    {
        echo "Error, usuario o contraseña incorrectos ";
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificaPass</title>
</head>
<body>
    <br>
    <a href="../Vista/ej3Vista.php">Volver
</body>
</html>