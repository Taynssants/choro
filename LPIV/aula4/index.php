<?php
include 'data.php';

$dia= (int) $_GET["dia"];
$mes= (int) $_GET["mes"];
$ano= (int) $_GET["ano"];

$data = new Data($dia,  $mes ,$ano);
$data->date();
$data->nextDate();
$data->date();
?>