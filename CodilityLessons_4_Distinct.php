<?php
function solution($A) {
    
    sort($A);
    $count = 0;
    
    if($A == null) {
     return 0;
    }
    
    for($i = 0; $i < count($A)-1; $i++) {
        
        if($A[$i] != $A[$i+1]) {

            $count++;
        }
    }
    return $count+1;    
}