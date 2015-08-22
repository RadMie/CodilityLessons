<?php
function solution($N, $A) {
    
    $array = array_fill(0, $N, 0);
    
    $max = 0;
    
    foreach($A as $a) {

        if($a > $N) {
        
           $array = array_fill(0, $N, $max);
  
        } else {
        
            $max = max(++$array[$a-1],$max);
        }
    }
    return $array;
}