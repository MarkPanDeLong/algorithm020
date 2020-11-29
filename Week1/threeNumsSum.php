<?php



class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        sort($nums);
	$len = count($nums);
	if ($len<3) {
		return [];
	}
 
	$head = 0;
	$tail = $len-1;

	for ($i=0; $i<$len-2; $i++) {

		while() {
		}
		while() {
		}
		{
		}
		{
		}
		$cur = $nums[$i] + $nums[$head] + $nums[$tail];
		$sum = $nums[];

	}


	var_dump($nums);
    }
}


$nums = $argv[1] ? explode(',', $argv[1]): 0;
$target = $argv[2] ?? 0;
//var_dump($nums,$target);

$a = Solution::threeSum($nums);
var_dump($a);
