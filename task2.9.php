<?php

$n = 10;
$mas = [];
$max = 0;
$min = 0;


for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    if(($mas[$i]>$max) && ($mas[$i]%2==0)){
        $max = $mas[$i];
    }
     if(($mas[$i]<$min) && ($mas[$i]%2!=0)){
        $min = $mas[$i];
    }
    echo $mas[$i].' ';
}

echo '<hr>';
echo 'Максимальный среди четных: '. $max;

echo '<hr>';
echo 'Минимальный среди нечетных: '. $min;


?>