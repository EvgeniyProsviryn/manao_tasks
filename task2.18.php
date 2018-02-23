<?php 

ini_set('display_errors', 'On');

$n = 10;
$mas = [];
$count = 0;


for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(10,20);
    echo $mas[$i].' ';
}

echo '<hr>';

$element = $mas[0];

for($i = 1;$i<$n;$i++){
    if($mas[$i] !== $element){
        $element = $mas[$i];
        $count++;
    }
}

echo "Количество различных элементов: $count";

?>