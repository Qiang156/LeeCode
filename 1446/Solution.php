<?php



class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxPower($s) {
        $len = strlen($s);
        if($len == 1) return 1;
        $max = 1;
        $tmp = 1;
        for($i = 1; $i < $len; $i ++) {
            if($s[$i] == $s[$i-1]) {
                $tmp ++;
            } else {
                $tmp = 1;
            }
            if($tmp > $max) $max = $tmp;
        }
        return $max;
    }
}