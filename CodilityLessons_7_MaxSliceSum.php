<?php
function solution($A) {
    
    $max = $A[0];
    $max1 = $A[0];
    $i = 0;
    
    foreach($A as $a) {
        
        if($i) {
        
            $max = max($a, $max + $a);
            $max1 = max($max1, $max);
        }
        
        $i++;
    }
    return $max1;
}