<?php

ini_set('display_errors', 'On');

$n = 10;
$mas = [];
$count = 0;

$a = [];
$b = [];

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    echo $mas[$i].' ';
}

echo '<hr>';

for($i = 0;$i<$n;$i++){
    if($mas[$i]>0 || $mas[$i]<0){
        $a[$i] = $mas[$i];
    }
    
    echo $a[$i].' ';
    
    if($mas[$i]%2==0 || $mas[$i]%2!=0){
        $b[$i] = $mas[$i];
        $count+=1;
    }
}

echo '<hr>';

for($i = 0;$i<$count;$i++){
    echo $b[$i].' ';
}

echo '<hr>';

?>