<?php 

$mas = [];
$mas2 = [];
$n = 5;
$min = 0;

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(10,20);
    echo $mas[$i].' ';
    $mas2[$i] = $mas[$i];
}

echo '<hr>';

for($i = 0;$i<$n-1;$i++){
    for($j = $i+1;$j<$n;$j++){
        if($mas[$i]==$mas[$j]){
            $mas2[$i] = "true";
            $mas2[$j] = "true";
            if($mas[$i]||$mas[$j]<$min){
                $min = $mas[$i];
            }
        }
    }
}

for($i = 0;$i<$n;$i++){
    echo $mas2[$i].' ';
}



echo "<hr>";

echo "Минимальный: $min";




?>