<?php

class Solution {

    const INTEGER_MIN = -2**31;
    const INTEGER_MAX = 2**31 - 1;

    private $stateList = [];

    function __construct() {
        $this->stateList = [
            'start' => ['start','signed','number','end'],
            'signed' => ['end','end','number','end'],
            'number' => ['end','end','number','end'],
            'end' => ['end','end','end','end']
        ];
    }
    /**
     * @param String $s
     * @return Integer
     * 自动机解法
     */
    function myAtoi($s): int
    {
        $len = strlen($s);
        $state = 'start';
        $ans = 0;
        $sign = 1;
        for($i = 0; $i < $len; $i ++) {
            $state = $this->stateList[$state][$this->getStateByPos($s[$i])];
            if($state == 'number') {
                $ans = $ans * 10 + $s[$i];
                $ans = $sign == 1 ? min($ans, self::INTEGER_MAX) : min($ans,-1*self::INTEGER_MIN);
            } else if ($state == 'end') {
                break;
            } else if($state == 'signed') {
                $sign = $s[$i] == '+' ? 1 : -1;
            }
        }
        return $sign * $ans;
    }

    function getStateByPos($c) {
        if($c == ' ') {
            return 0;
        } else if($c == '-' || $c == '+') {
            return 1;
        } else if( is_numeric($c) ) {
            return 2;
        } else {
            return 3;
        }
    }
}


$instance = new Solution();
$str = [
    " -42", "-1", "+1", "+1-1", "000042", "3.1415", "-3.1415", "a3.14", "3.14a",
    "3a.14", "00000-42a1234", "0000042a1234", "00000+42a1234", "11111-42a"
];

foreach ($str as $key => $val) {
    echo $val,' => ',$instance->myAtoi($val),"\r\n";
}