<?php 

$mas = [];
$n = 5;
$list = "";
$flag = false;
$max = 0;

for($i = 0;$i<$n;$i++){
    $mas[$i] = rand(10,20);
    echo $mas[$i].' ';
}

echo '<hr>';

for($i = 0;$i<$n-1;$i++){
    for($j = $i+1;$j<$n;$j++){
        if($mas[$i]==$mas[$j]){
            $mas[$i] = "true";
            $mas[$j] = "true";
        }
    }
}

for($i = 0;$i<$n;$i++){
    echo $mas[$i].' ';
}


echo '<hr>';

for($i = 0;$i<$n;$i++){
    if($mas[$i]!="true"){
        $list =$list.$mas[$i].' ';
        if($mas[$i]>$max){
            $max = $mas[$i];
        }
    }
}   


echo 'Элементы: '.$list;

echo "<hr>";

echo "Максимальный: $max";




?>