<?php
    
    include "Data.php";
    include "Data2.php";

    $dia = (int) $_GET["dia"];
    $mes = (int) $_GET["mes"];
    $ano = (int) $_GET["ano"];

    $data = new Data($dia, $mes, $ano);
    $data->date();
    $data->nextDate();
    $data->date();

    $data2 = new Data2($dia, $mes, $ano);
    $data2->date();
    $data2->nextDate();
    $data2->date();
?>