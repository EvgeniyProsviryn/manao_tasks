<?php

$min = 0;
$max = 0;

$n = 10;
$mas = [];

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);

    if(($mas[$i]>$max) && ($mas[$i]%2==0)){
        $max = $mas[$i];
        $index = $i;
    }
    
    echo $mas[$i]. " ";
}

echo '<hr>';
echo "max = $max";
echo '<hr>';
echo 'Index: '.$index;
echo '<hr>';

$mas[$index] = $index;

for($i = 0;$i<$n;$i++){
    echo $mas[$i].' ';
}

?>