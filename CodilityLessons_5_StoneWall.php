<?php
function solution($H) {

    $block = 0;
    $arr = array_fill(0,count($H),0);
    $num = 0;
    
    foreach($H as $h) {
        
        while($num > 0 && $arr[$num-1] > $h) {
            $num--;
        }
        if($num > 0 && $arr[$num-1] == $h) {
            continue;
        } else {
            $block++;
            $arr[$num++] = $h;
        }
    }
    return $block;
}