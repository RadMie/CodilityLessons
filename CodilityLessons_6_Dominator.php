<?php
function solution($A) {
    
    $half = count($A) / 2;
    $i = 0;
    $dominator = 0;
    $count = 0;
    $countmax = 0;
    $B = $A;
    sort($B);
    
    foreach($B as $a) {
        
        if($i != 0) {
        
            if($a == $B[$i-1]) {
            
                $count++;
                
                if($count > $countmax) {
                
                    $countmax = $count;
                    $dominator = $a;
                }
            }
        }
        $i++;
    }
    
    if($i == 1) {
        return 0;
    }
    
    if($count+1 <= $half || count($A) == 0) {
        return -1;
    }
    
    $i = 0;
    
    foreach($A as $a) {
    
        if($a == $dominator) {
            
            return $i;
        }
        $i++;
    }
}