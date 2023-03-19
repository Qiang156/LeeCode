<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     * 思路都是对的，可是想不出计算公式，哭～～～
     * 这个$down的思路真是神来一笔
     */
    function convert($s, $numRows) {
        if($numRows == 1) return $s;
        $len = strlen($s);
        $currRow = 0;
        $down = false;
        $return = [];
        for($i = 0; $i < $len; $i ++) {
            $return[$currRow] .= $s[$i];
            if( $currRow == 0 || $currRow == $numRows-1 ) $down = !$down;
            $currRow += $down ? 1 : -1;
        }
        return join("",$return);
    }

}

$instance = new Solution();
$string = "PAYPALISHIRING";
$number = 4;
echo $instance->convert($string, 4);


for($i=0; $i < 28; $i ++) {
    echo
}




