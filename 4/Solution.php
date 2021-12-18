<?php


class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
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
}

$nums1 = [1,2,3];
$nums2 = [3,4];
$instance = new Solution();
echo $instance->findMedianSortedArrays($nums1,$nums2);
echo "\r\n";

