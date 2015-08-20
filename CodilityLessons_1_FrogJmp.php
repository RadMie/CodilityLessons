function solution($X, $Y, $D) {

    if($X == $Y) {
    
        return 0;
    } else {
    
        $temp = $Y - $X;
        $temp1 =  (int)($temp / $D);
    
        if($temp % $D) {
        
            return $temp1 +1;
        } else {
            return $temp1;
        }
    }

}
