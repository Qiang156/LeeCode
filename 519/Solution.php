<?php


class Solution {
    /**
     * @param Integer $m
     * @param Integer $n
     */
    private $m = null;
    private $n = null;
    private $total = null;
    private $map = [];

    function __construct($m, $n) {
        $this->m = $m;
        $this->n = $n;
        $this->total = $m * $n;
    }

    /**
     * @return Integer[]
     */
    function flip() {
        $this->total -- ;
        $rand = mt_rand(0, $this->total);

        $idx = isset($this->map[$rand]) ? $this->map[$rand] : $rand;

        $this->map[$rand] = isset($this->map[$this->total]) ? $this->map[$this->total] : $this->total;

        return [ floor($idx/$this->n), $idx%$this->n ];

    }

    /**
     * @return NULL
     */
    function reset() {
        $this->total = $this->m * $this->n;
        $this->map = [];
    }
}

/**
 * Your Solution object will be instantiated and called as such:
 * $obj = Solution($m, $n);
 * $ret_1 = $obj->flip();
 * $obj->reset();
 */