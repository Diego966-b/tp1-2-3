<?php
function verNumero ()
{
    $frase = "";
    $numeroForm = $_GET["numeroForm"];
    if ($numeroForm > 0)
    {
        $frase =  "El número ".$numeroForm." es positivo<br>";
    }
    else if ($numeroForm < 0)
    {
        $frase =  "El número ".$numeroForm. " es negativo <br>";
    }
    else 
    {
        $frase =  "El número ".$numeroForm. " es cero <br>";
    }
    return $frase;
}
?>