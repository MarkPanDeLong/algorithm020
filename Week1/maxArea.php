<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $len = sizeof($height);
	if ( $len<2 ) {
		return 0;
	}
	$maxArea = 0;
	$head = 0;
	$tail = $len-1;
	while($head<$tail) {
		$curArea = ($tail-$head) * min($height[$head], $height[$tail]);
		$maxArea = max($maxArea, $curArea);
		if ($height[$head]<$height[$tail]) {
			$head++;
		} else {
			$tail--;
		}
	}
	return $maxArea;
    }
}
