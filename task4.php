<?php

$arr = ['2354','2352','345','1','6780','1234'];

function task4($arr){
    for($i = 0;$i<=count($arr);$i++){
        if($arr[$i]%2 == 0){
            if (($arr[$i] / 1000 < ($arr[$i] % 1000) / 100) && (($arr[$i] % 1000) / 100 < ($arr[$i] % 100) / 10) && (($arr[$i] % 100) / 10 < $arr[$i] % 10))
            return $arr[$i].' ';
        }
    }
}   

echo task4($arr);


?>