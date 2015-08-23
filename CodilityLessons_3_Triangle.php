<?php

function solution($A) {

    if($A == null || count($A) < 3) {
        
        return 0;
    }
    
    sort($A);
    
    for($i = 0; $i < count($A)-2; $i++) {
    
        if(($A[$i] >= 0 && $A[$i] > $A[$i+2] - $A[$i+1])) {
        
            return 1;
        }
    }
    return 0;
}