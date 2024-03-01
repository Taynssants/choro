<?php
 include 'Empregado.php';

 $primeiroNome = $_GET["primeiroNome"];
 $sobrenome = $_GET["sobrenome"];
 $salario = (int) $_GET["salario"];

 $empregado = new Empregado($primeiroNome, $sobrenome, $salario);
 
?>