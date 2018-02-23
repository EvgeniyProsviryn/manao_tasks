<?php 

$n = 10;
$mas = [];

$max = 0;
$min = 0;

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(-50,50);
    if($mas[$i]>$max){
        $max = $mas[$i];
    }
    if($mas[$i]<$min){
        $min = $mas[$i];
    }
    echo $mas[$i].' ';
}

echo '<hr>';
echo "Максимальный: $max";
echo '<hr>';
echo "Минимальный: $min";
echo '<hr>';
    

for($i = 0;$i<$n;$i++){
    if($mas[$i]%2==0){
        $mas[$i] = $max;
    }
    if($mas[$i]%2!=0){
        $mas[$i] = $min;
    }
    
    echo $mas[$i].' ';
}

?>