<?php


ini_set('display_errors', 'On');

$col=0;
$n = 10;

$a = [];


for($i=0; $i<$n; $i++){
    $a[$i] = rand(10,20);
    echo $a[$i].' ';
}


for($i=0; $i<$n; $i++){
      $temp=0;
      for($j=0; $j<$n; $j++){
          if($a[$i]==$a[$j]){
               $temp++;
          }
      
      if($temp==0){
          for($j=$i-1; $j<$n; $j++){
              if($a[$i]==$a[$j]){
                  $temp++;
              }
          }
          
          if($temp>1){
              $col++;
          }  
       }
      }
}

echo "Количество: $col";


?>