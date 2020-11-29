<?php


class Solution {

    /**
     * @param Integer[] $nums -- 暴力双循环遍历  时间O(n^2),空间O(1)
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $len = sizeof($nums);
        $res = [];
        for($i=0; $i<$len; $i++) {
            for ($j=$i+1; $j<$len; $j++) {
                $sum = $nums[$i]+$nums[$j];
                if ($sum==$target) {
                    $res[] = $i;
                    $res[] = $j;
                }
            }
        }

        return $res;
    }
}



class Solution2 {

    /**
     * @param Integer[] $nums -- 
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
	    $len = sizeof($nums);
	    $found = [];
	    for ($i=0; $i<$len; $i++) {
		    $exist = array_search($target-$nums[$i], $nums);
		    if ($exist!==FALSE && $exist!==$i) {
			    $found = [$i,$exist];
			    break;
		    }
	    }
	    return $found;
    }
}


$nums = $argv[1] ? explode(',', $argv[1]): 0;
$target = $argv[2] ?? 0;
//var_dump($nums,$target);

//$a = Solution::twoSum($nums, $target);
$a = Solution2::twoSum($nums, $target);
var_dump($a);

