<?php

ini_set('display_errors', 'On');


function task7($n){
    $n = strval($n);
    $x = 0;
    $res = 0;
    for($i = 0; $i<strlen($n); $i++){
        for($x = 0;$x<10;$x++){
            $count = substr_count($n,$x);
            if($count>0){
                $res = $count;
            }
        }
        
    }
    
   if($res<=2){
       echo "Есть 2 одинаковые цифры";
   }

}

task7(77942);

?>