function solution($A) {
    
    sort($A);
    
    $last = $A[0];
    
    if($A[0] != 1) {
        return 0;
    }
    
    if(count($A) == 1 && $A[0] != 1) {
        return 0;
    }
    
    if(count($A) == 2) {
    
        if($A[0] == $A[1]){
            return 0;
        } elseif(($A[1]-$A[0])>1){
            return 0;
        } else {
            return 1;
        }
    }
    
    $count = 0;
    
    foreach($A as $a) {
        
        if(($a - $last) > 1){
            return 0;
        }
        
        if($count && ($a - $last) == 0) {
            return 0;
        }
        
        $last = $a;
        $count++;
    }
    
    return 1;
}