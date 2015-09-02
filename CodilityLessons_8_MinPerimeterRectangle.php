<?php
function solution($N) {
    
    $per = 2*($N+1);
    
    
    for($i = 1;$i * $i <= $N;$i++) {
        
        if($N % $i == 0) {
        
            $per = min($per, 2*($i+($N/$i)));
        }
    }
    return (int)$per;
}