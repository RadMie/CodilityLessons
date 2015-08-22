function solution($A) {

    $pair = 0;
    $start = 0;

    
    foreach($A as $a) {
        
        if(!$a) {
            
            $start++;
        
        } else {
        
            $pair += $start;
        }
        
        if($pair > 1000000000) {
        
            return -1;
        }
        
    }
    
    return $pair;
}