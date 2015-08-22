<?php
function solution($X, $A) {
    
    $count = 0;
    $x = 0;
    $array = array_fill(0, $X+1, 0); 
     
    foreach($A as $a) {
    
        if($array[$a] == 0) {
            $array[$a] = $a;
            
            $x++;
            
            if($x == $X) {
            
                return $count;
            }
        }
        $count++;
    }
    return -1;
}