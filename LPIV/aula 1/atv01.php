<?php

function printFor(){
for($i=0; $i<=15; $i++){
    echo $i;
}
echo "<br>";
}

echo "<br>";


function printWhile(){
    $w=0;
    while($w<=15){
        echo $w;
        $w++;
        echo "<br>";
    }
}

printWhile();

?>