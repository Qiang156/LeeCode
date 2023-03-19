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


