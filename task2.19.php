<?php

$n = 10;
$mas = [];
$element = 0;
$p = 7;
$index = 0;
$last = 0;

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    echo $mas[$i].' ';
}

echo '<hr>';

for($i = 0;$i<$n;$i++){
    if(($mas[$i]%2==0) && ($mas[$i]%$p) && ($mas[$i]>0)){
        $index = $i;
    }
}

echo $index;

$last = $mas[$n-1];
$mas[$index] = $index;

$mas[$n-1] = $mas[$index];
$mas[$index] = $last;
echo '<hr>';
echo $last;
echo '<hr>';

for($i = 0;$i<$n;$i++){
    echo $mas[$i].' ';
}




?>