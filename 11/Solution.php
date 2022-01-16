<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $left = 0;
        $right = count($height)-1;
        $max = 0;
        while ($left < $right) {
            $ans = ($right - $left) * min($height[$left], $height[$right]);
            $max = max($max, $ans);
            if( $height[$left] <= $height[$right] ) {
                $left ++;
            } else {
                $right --;
            }
        }
        return $max;
    }
}

$sol = new Solution();
$array = [2,3,4,5,18,17,6];
print($sol->maxArea($array));
echo "\r\n";