<?php


class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     * 本题的时间复杂度O(N),好像没达到要求。题目要求O(logN)
     * 算法中，logN一般意味着要使用二分查找法
     */
    function findMedianSortedArrays(array $nums1, array $nums2) {
        $m = count($nums1);
        $n = count($nums2);
        $total = $m + $n;
        $pos = $total%2 == 0 ? $total/2 : ($total-1)/2;

        $left = 0;
        $right = 0;
        $median = [];
        while( $left + $right <= $pos ) {
            if($left < $m && $right < $n) {
                if( $nums1[$left] <= $nums2[$right] ) {
                    $median[] = $nums1[$left];
                    $left ++;
                } else {
                    $median[] = $nums2[$right];
                    $right ++;
                }
            } elseif ($left < $m) {
                $median[] = $nums1[$left];
                $left ++;
            } else {
                $median[] = $nums2[$right];
                $right++;
            }
            if(count($median) > 2) array_shift($median);
        }
        return $total%2 == 0 ? array_sum($median)/2 : array_pop($median);
    }

    /**
     * 二分查找法，参考解题思路
     */
    function findMedianArray(array $nums1, array $nums2) {
        $total = count($nums1) + count($nums2);
        if($total % 2 == 1) {
            $median = $this->findMedianByPos( $nums1,$nums2,($total-1)/2 );
        } else {
            $median = ( $this->findMedianByPos( $nums1,$nums2,$total/2 - 1 ) +
                $this->findMedianByPos( $nums1,$nums2,$total/2 ) ) / 2;
        }
        return $median;
    }

    //TODO
    function findMedianByPos(array $nums1, array $nums2, int $pos) {
        $m = count($nums1);
        $n = count($nums2);
    }
}

$nums1 = [1,2,3];
$nums2 = [3,4];
$instance = new Solution();
echo $instance->findMedianSortedArrays($nums1,$nums2);
echo "\r\n";

