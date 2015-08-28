<?php
function solution($A) {
    
    $count = count($A);
    $min = $A[0];
    $max = 0;
    $pro = 0;
    
    if($count == 0 || $count == 1) {
        return 0;
    }
    
    foreach($A as $a) {
    
        if($a < $min) {
            $min = $a;
        }
       
        if(($a - $min) > $pro) {
            $pro = ($a - $min);
        }

    }
    return $pro;
}