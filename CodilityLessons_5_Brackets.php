<?php
function solution($S) {

    $count = 0;
    $arr = array_fill(0,count($S),0);
    $num = 0;
    
    $A = str_split($S);
    
    if($A[0] == "" || $A[0] == " ") {
        return 1;
    }

    foreach($A as $a) {
    
        if($a == "(") {
        
            $count++;
            $arr[$num++] = 1;
            
        } elseif($a == "{") {
            
            $count++;
            $arr[$num++] = 2;
            
        } elseif($a == "[") {
            
            $count++;
            $arr[$num++] = 3;
            
        } elseif($a == ")" && $arr[max($num-1,0)] == 1) {
        
            $count--;
            $num--;
            
            if($count < 0) return 0;
        
        } elseif($a == "}" && $arr[max($num-1,0)] == 2) {
        
            $count--;
            $num--;
            
            if($count < 0) return 0;
        
        } elseif($a == "]" && $arr[max($num-1,0)] == 3) {
        
            $count--;
            $num--;
            
            if($count < 0) return 0;
        } else {
            return 0;
        }
    }
    
    if($count == 0) {
        return 1;
    } else {
        return 0;
    }
}