<?php

/**
 * Two Sum
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        foreach($nums as $key => $val) {
            $diff = $target - $val;
            if( isset($map[$diff]) ) {
                return [$map[$diff], $key];
            } else {
                $map[$val] = $key;
            }
        }
    }
}

$solution = new Solution();
$test = [
    [2,7,11,15],
    [-3,1,3,9,11]
];
$target = [9,0];

foreach($test as $key => $nums) {
    $return = $solution->twoSum($nums, $target[$key]);
    echo '[', join(',', $return), ']';
}


