<?php


function task3($n){
    if (($n / 1000 < ($n % 1000) / 100) && (($n % 1000) / 100 < ($n % 100) / 10) && (($n % 100) / 10 < $n % 10))
        return "Образуют";
    else return "Не образуют";
}

echo task3(56);


?>