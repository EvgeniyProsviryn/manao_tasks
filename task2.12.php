<?php

$n = 10;
$mas = [];

$max = 0;
$min = 0;


for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    if($mas[$i]<0 && $mas[$i]<$max){
        $max = $mas[$i];
    }
  
    echo $mas[$i].' ';
}

$min = $mas[0];

for($i = 1;$i<$n;$i++){
    if(($mas[$i]>0) && ($mas[$i]<$min)){
        $min = $mas[$i];
    }
}


echo '<hr>';

echo "Наибольший из отрицательных: ". $max;

echo '<hr>';

echo "Наименьший из положительных: ". $min;

?>