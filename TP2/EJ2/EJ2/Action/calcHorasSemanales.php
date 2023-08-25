<?php
function calcHorasSemanales ()
{
    $colHorarios = array ();
    if (($_GET["lunes"] <> "") && ($_GET["martes"] <> "") && ($_GET["miercoles"] <> "") && ($_GET["jueves"] <> "") && ($_GET["viernes"] <> ""))
    {
        $colDias = array ();
        $colDias [0] = "lunes";
        $colDias [1] = "martes";
        $colDias [2] = "miercoles";
        $colDias [3] = "jueves";
        $colDias [4] = "viernes";
        for ($pos = 0; $pos < 5; $pos++)
        {
            $dia = $_GET [$colDias[$pos]];
            $colHorarios [$pos] = $dia;
        }    
    }
    return $colHorarios;
}
?>