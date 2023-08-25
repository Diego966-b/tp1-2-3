<?php
    $dir = "../Archivos/";
    if ($_FILES['miArchivo']["error"] <= 0) 
    {
        $tipoArchivo = $_FILES["miArchivo"]["type"];
        if (($tipoArchivo == "application/msword" || $tipoArchivo == "application/pdf"))
        {
            $tamanioArchivo = $_FILES['miArchivo']['size'];
            if ($tamanioArchivo < 2 * 1024 * 1024)
            {
                if (!copy($_FILES['miArchivo']['tmp_name'], $dir.$_FILES['miArchivo']['name'])) 
                {
                    echo "Error al subir el archivo";
                }
                else
                {
                    $urlArchivo = $dir . $_FILES['miArchivo']['name'];
                    echo '<a href="'. $urlArchivo. '">Enlace al archivo subido</a><br>';
                }
            }
            else
            {
                echo "Error, el tamaño del archivo debe ser menor a 2mb";
            }
        }
        else
        {
            echo "Error, el archivo debe ser .doc o .pdf";
        }
    } 
    else
    {
        echo "Error al subir el archivo";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="../Vista/ej1vista.php">volver</a>
</body>
</html>