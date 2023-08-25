<?php
if ((!empty($_GET["num1"])) && (!empty($_GET["num2"])))
{
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operacion = $_GET["operacion"];    
    echo "Número 1: ".$num1."<br>";
    echo "Número 2: ".$num2."<br>";
    echo "La operacion elegida es ".$operacion."<br>";
    switch ($operacion)
    {
        case "Suma":
            $resultado = $num1+$num2;
            echo "El resultado de ".$num1." + ".$num2." es ".$resultado;
        break;
        case "Resta":
            $resultado = $num1-$num2;
            echo "El resultado de ".$num1." - ".$num2." es ".$resultado;
        break;
        case "Multiplicacion":
            $resultado = $num1*$num2;
            echo "El resultado de ".$num1." * ".$num2." es ".$resultado;
        break;
    }
}
else
{
    echo "No recibi datos";
}
?>

<html>
    <head>
        <title>ej7</title>
    </head>
    <body>
        <br>
        <a href="../Vista/ej7Vista.php">Volver</a>
    </body>
</html>