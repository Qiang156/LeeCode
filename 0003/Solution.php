<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        if($len <= 1) return $len;
        $map = [];
        $max = 1;
        $pos = 0;
        for($i = 0; $i < $len; $i ++) {
            if( isset($map[$s[$i]]) ) {
                for($k = $pos; $k < $i; $k ++) {
                    unset($map[$s[$k]]);
                    if($s[$k] == $s[$i]) break;
                }
                $pos = $k+1;
            }
            $map[$s[$i]] ++;
            $max = count($map) > $max ? count($map) : $max;
        }
        return $max;
    }
}


$string = "aabaab!bb";
$sol = new Solution();
echo $sol->lengthOfLongestSubstring($string);
echo "\r\n";
