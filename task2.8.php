<?php

$max = 0;
$otr = 0;

$n = 10;
$mas = [];

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    echo $mas[$i].' ';
}

echo '<hr>';

for($i = 0;$i<$n;$i++){
    if($mas[$i]>0){
        $max = $mas[$i];
    }
}


echo "Максимальный : $max";
echo '<hr>';


for($i = 0;$i<$n;$i++){
    if($mas[$i]<0){
        $otr = $mas[$i];
        $buf = $i;
        
    }
}

echo "Последний отрицательный : $otr";
echo '<hr>';

for($i = 0;$i<$n;$i++){
    if($mas[$i] == $max){
        $mas[$i]=$otr;
        $mas[$buf] = $max;
    }
    
}

for($i = 0;$i<$n;$i++){
    
    
    echo $mas[$i].' ';
    
}


?>