<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {

        $prevous = $nums[0];
        foreach ( $nums as $key => $val) {
            if($key == 0) continue;
            if($val == $prevous) unset($nums[$key]);
            else {
                $prevous = $val;
            }
        }
        return count($nums);
    }
}
