<?php
function solution($S) {

    $count = 0;
    
    $A = str_split($S);
    
    if($A[0] == "" || $A[0] == " ") {
        return 1;
    }

    foreach($A as $a) {
        
        if($a == "(") {
        
            $count++;
        } else {
        
            $count--;
            
            if($count < 0) {
                return 0;
            }
        }
    }
    
    if($count == 0) {
        return 1;
    } else {
        return 0;
    }
}