<?php
include 'Invoice.php';

$numero = (int)$_GET["numero"];
$descricao = $_GET["descricao"];
$quantidade = (int) $_GET["quantidade"];
$preco = (int) $_GET["preco"];


 $invoice = new Invoice($numero, $descricao, $quantidade, $preco);
?>