<?php

ini_set('display_errors', 'On');
    
$n = 10;

$mas = [];

$polozh = 0;
$otr = 0;
$buf = 0;
$f = 0;

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    echo $mas[$i]. " ";
}

echo '<hr>';

for($i = 0;$i<$n;$i++){
    if($mas[$i]>0){
        $polozh = $i;
        break;
    }
}

for($i = 0;$i<$n;$i++){
    if($mas[$i]<0){
        $buf = $mas[$polozh];
        $mas[$polozh] = $mas[$otr];
        $mas[$otr] = $buf;
    }
}

for($i = 0;$i<$n;$i++){
    echo $mas[$i].' ';
}


    
?>