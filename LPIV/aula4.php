<?php

include "Pessoa.php";
include "Professor.php";


$pessoa=new Pessoa("tONON", 20,1234);
$pessoa->seApresentar();
$professor = new Professor("Nicolau",27, 4321, "CEPIM");
$professor->seApresentar();

?>