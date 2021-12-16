<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {

        $y = $x < 0 ? -1 * $x : $x;

        $new = $y%10;
        while($y >= 10) {
            $y = floor($y/10);
            if($new != 0) $new .= $y%10;
            else $new = $y%10;
        }

        $new = $x > 0 ? 1 * $new : -1 * $new;
        if( $new > 2**31 || $new <= -2**31 ) return 0;
        return $new;

    }
}
