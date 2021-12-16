<?php


class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Integer[]
     */
    function findAnagrams($s, $p) {
        $slen = strlen($s);
        $plen = strlen($p);
        if($slen < $plen) return [];

        $sCnt = array_fill_keys(range('a','z'), 0);
        $pCnt = array_fill_keys(range('a','z'), 0);

        for ($i=0; $i<$plen; $i++) {
            $sCnt[$s[$i]] ++;
            $pCnt[$p[$i]] ++;
        }

        $return = [];
        if($sCnt === $pCnt) $return[] = 0;

        for($i = $plen; $i < $slen; $i ++) {
            $sCnt[$s[$i-$plen]] --;
            $sCnt[$s[$i]] ++;
            if($sCnt[$s[$i]] != $pCnt[$s[$i]]) continue;

            if( $sCnt === $pCnt ) {
                $return[] = $i-$plen+1;
            }
        }

        return $return;



    }
}