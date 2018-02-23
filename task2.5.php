<?php

$min = 0;
$max = 0;

$n = 10;
$mas = [];

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    if($mas[$i]<$min){
        $min = $mas[$i];
    }
    if($mas[$i]>$max){
        $max = $mas[$i];
    }
    
    echo $mas[$i]. " ";
}

echo '<hr>';

echo "max = $max";
echo '<hr>';

echo "min = $min";
        echo '<hr>';


for($i = 0;$i<$n;$i++){
    if($mas[$i] == $min){
        echo $max.' ';
    }
    if($mas[$i] == $max){
        echo $min.' ';
    }
    if($mas[$i]!=$max && $mas[$i]!=$min){
        echo $mas[$i]." ";
    }
}




?>