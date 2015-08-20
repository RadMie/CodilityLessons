function solution($A) {

    sort($A);

    if($A[0] == 2 || count($A) == 0) {
        return 1;
    }

    $last = $A[0];

    foreach($A as $a) {

        if(($a - $last) > 1) {

            return $last+1;
        }
        $last = $a;
    }
    return $last+1;
}
