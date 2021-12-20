<?php


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $return = "";
        $len = strlen($s);
        if($len == 1) { return $s; }
        for ($i = 0; $i < $len; $i ++) {
            $str1 = $this->checkSubStringFromPos($s,$i,$i);
            $str2 = $this->checkSubStringFromPos($s,$i,$i+1);
            $tmp = strlen($str1) > strlen($str2) ? $str1 : $str2;
            $return = strlen($tmp) > strlen($return) ? $tmp : $return;
        }
        return $return;
    }

    function checkSubStringFromPos($s, $left, $right) {
        $ret = "";
        $len = strlen($s);
        while ($left >=0 && $right < $len && $s[$left] == $s[$right]) {
            $_len = $right - $left + 1;
            $ret = substr($s, $left, $_len);
            $left --;
            $right ++;
        }
        return $ret;
    }
}

$instance = new Solution();
$string = [ "b", "bb", "bbb", "ababa", "bbbbbbc","cbbbbbb","aaba", "abaaa", "cbbd","tattarrattat"];
//$string = ["tattarrattat"];
foreach( $string as $key => $val) {
    echo $instance->longestPalindrome($val), "\r\n";
}
