<?php
function solution($N) {
    
    $count = 0;
    
    for($i = 1;$i * $i <= $N;$i++) {
        
        if($N % $i == 0) {
        
            if($i * $i < $N) {
                $count += 2;
            } else {
                $count++;
            }
        }
    }
    return $count;
}