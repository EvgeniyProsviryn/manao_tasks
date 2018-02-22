<?php
   function task2($n){
        for($i=1000; $i<10000; $i++)
        {
            if(($i%10+i/1000+(($i-$i%10)/100)%10)==$n){
	   		  return "$i ";
            }
        }
   }

   echo task2(18);
?>