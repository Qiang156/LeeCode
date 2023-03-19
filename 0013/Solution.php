<?php

class Solution {

     /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $maps = [
            'M'=>1000,'CM'=>900,'D'=>500,'CD'=>400,'C'=>100,'XC'=>90,
            'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1
        ];
        
        $res = 0;
        foreach($maps as $key => $val) {
            $len = strlen($key);
            while (substr($s,0,$len) == $key) {
                $res += $val;
                $s = substr($s,$len);
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
    if($val == $sol->romanToInt($res[$key])) {
        $suss[$res[$key]] = 'Pass';
    }
}
print_r($suss);
