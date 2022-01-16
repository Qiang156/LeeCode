<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $Symbols = ['M',  'CM', 'D',  'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];
        $Values = [1000,   900,  500, 400,  100,  90,  50,   40,  10,  9,   5,   4,    1];
        $res = '';
        foreach($Symbols as $key => $sym) {
            while ($num >= $Values[$key]) {
                $res .= $sym;
                $num -= $Values[$key];
            }
        }
        return $res;
    }
}


$sol = new Solution();
$nums = [3,4,6,58,1994,3590];
$res = ['III','IV','VI','LVIII','MCMXCIV','MMMDXC'];
$suss = [];
foreach ($nums as $key => $val) {
    if($res[$key] == $sol->intToRoman($val)) {
        $suss[$val] = 'Pass';
    }
}
print_r($suss);
