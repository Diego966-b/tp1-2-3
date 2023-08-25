<?php
$contenido = "";
if ($_FILES['miArchivo']["error"] <= 0) 
{
    $archivo = $_FILES["miArchivo"];
    if ($archivo["type"] == "text/plain") 
    {
        $contenido = file_get_contents($archivo["tmp_name"]);
    } 
    else 
    {
        echo "El archivo debe ser de tipo txt.";
    }
} else {
    echo "No se ha subido ningún archivo.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2.php</title>
</head>
<body>
    <br>
    <textarea><?php echo $contenido; ?></textarea>
    <br>
    <a href="../Vista/ej2Vista.php">Volver</a>
</body>
</html>