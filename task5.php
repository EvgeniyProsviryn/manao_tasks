<?php

$arr = [];
    
function task5($n){
    $n = strval($n);
    
    for($i = strlen($n);$i>=0;$i--){
       echo $n[$i];     
    }
}

task5(1234);

?>