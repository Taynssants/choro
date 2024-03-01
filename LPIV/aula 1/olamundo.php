<?php

//uso do For
for ($i=0; $i<5; $i++){
    echo $i;
}

echo "<br>";

//uso do While
$w = 0;
while ($w<=5){
    echo $w;
    $w++;
}

//uso do Do while

$d = 0;

do {
    echo $d;
    $d++;
} while ($d<=5);

//uso do For Each (o mais utilizado, pois é mais fácil de trabalhar)

$array = [0,1,2,3,4,5];
foreach ($array as $number){
    echo $number;
}



function funcaoFor(){
    for ($i=0; $i<5; $i++){
        echo $i;
    }
echo "<br>";
}


funcaoFor();
?>