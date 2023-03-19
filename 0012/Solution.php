<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $maps = [
            'M'=>1000,'CM'=>900,'D'=>500,'CD'=>400,'C'=>100,'XC'=>90,
            'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1
        ];
        $res = '';
        foreach($maps as $key => $val) {
            while ($num >= $val) {
                $res .= $key;
                $num -= $val;
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
