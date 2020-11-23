<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $len = sizeof($nums);
        if ($len<2) return;
        $k = 0;
        for ($i=0; $i<$len; $i++) {
            if ($nums[$i]) {
                if ($i!=$k) {
                    $nums[$k] = $nums[$i];
                    $nums[$i] = 0;
                }
                $k++;
            }
        }
    }
}
