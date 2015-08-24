<?php
function solution($A) {
    
    sort($A);
    $count = count($A);
    
    return max($A[0] * $A[1] * $A[$count-1], $A[$count-1] * $A[$count-2] * $A[$count-3]); 
}