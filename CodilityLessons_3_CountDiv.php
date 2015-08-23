<?php

function solution($A, $B, $K) {
    
    if($A % $K==0) {
    
		return (int)floor(($B-$A) / $K) + 1;
	} else {
	
		return (int)floor($B / $K - (floor($A / $K) + 1)) + 1;
	}
}