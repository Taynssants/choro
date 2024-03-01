<?php

$var = NULL;

echo $var ?? "Ola mundo";


$n1=1;
$n2=2;

if($n1>=0 && $n2>=50){
    echo "foi";
}

if($n1>=0 || $n2>=50){
    echo "foi";
}
?>