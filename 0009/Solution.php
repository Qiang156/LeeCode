<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     *
     * 当 x < 0 时，x 不是回文数。
     * 同样地，如果数字的最后一位是 0，为了使该数字为回文，
     * 则其第一位数字也应该是 0
     * 只有 0 满足这一属性
     */
    function isPalindrome($x) {
        if($x < 0) return false;
        if($x != 0 && $x%10 == 0) return false;
        $ans = 0;
        $tmp = $x;
        while($ans < $tmp) {
            $ans = $ans * 10 + $tmp % 10;
            $tmp = floor($tmp / 10);
            //echo $ans,'<>',$tmp,"\r\n";
        }
        return $ans == $tmp || $tmp == floor($ans/10);
    }
}

$instance = new Solution();
if($instance->isPalindrome(-1)) {
    echo 'true';
} else {
    echo 'false';
}
