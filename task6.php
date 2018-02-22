<?php

ini_set('display_errors', 'On');

$arr = ['2357','1','23','44','3560','7777'];


function task6($arr){
    $flag = 'false';
    for($i = 0; $i<count($arr); $i++){
        
        $n = $arr[$i];
            if($n>1000&&$n<10000){
                if(stristr($n, '2') === FALSE && stristr($n, '0') === FALSE && stristr($n, '3') === FALSE && stristr($n, '7') === FALSE) {
                echo 'не найдено ';
            }else{
                echo $n.' ';
            }
        }
        
        
    }
}

task6($arr);

?>