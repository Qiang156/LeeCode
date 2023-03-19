<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (count($strs) == 1) return $strs[0];
        $first = array_shift($strs);
        $len = strlen($first);
        $comm = '';
        $tag = True;
        for($i = 1; $i <= $len; $i ++) {
            $tmp = substr($first,0,$i);
            foreach($strs as $str) {
                if (substr($str,0,$i) != $tmp) {
                    $tag = FALSE;
                    break;
                }
            }
            if ($tag) {
                $comm = $tmp;
            }else{
                break;
            }
        }
        return $comm;
    }
}


$sol = new Solution();
$strs = ["flower","flower","flower"];
echo $sol->longestCommonPrefix($strs);
echo "\n";
