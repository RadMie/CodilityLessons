<?php
function solution($A) {
    
    sort($A);
    
    $last = 0;
    
    if(count($A) == 1) {
        if($A[0] == 1) {
            return 2;
        } else if($A[0] == 2) {
            return 1;   
        }
    }
    
    foreach($A as $a) {
    
        if($a > 0) {
            
            if(($a - $last) > 1) {
                return $last+1;
            }
            
            $last = $a;
        }
    }
    return $last+1;
}