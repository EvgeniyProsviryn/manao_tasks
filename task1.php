<?php
echo "1. ";

function task1($n){
    return $n < 10 ? ($n < 5) : ($n % 10 < 5) + Count($n/10);
}

echo task1(14.543);

?>