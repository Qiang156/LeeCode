<?php


/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $ret = null;
        $next = null;
        $flag = 0;
        while( $l1 || $l2 || $flag ) {
            $val = $l1->val + $l2->val + $flag;
            if($val > 9) {
                $val -= 10;
                $flag = 1;
            } else {
                $flag = 0;
            }
            $tmp = new ListNode($val);
            if( is_null($ret) ) {
                $ret = $tmp;
            } else {
                //from the second time, it will be called in order to build a linked list.
                $next->next = $tmp;
            }
            // $next object will be build at the first time.
            $next = $tmp;
            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        return $ret;
    }
}