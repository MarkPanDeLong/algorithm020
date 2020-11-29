<?php

class Solution1 {

    /**
     * @param Integer $n -- 傻递归  时间O(n^2) 空间O(n)
     * @return Integer
     */
    function climbStairs($n) {
        if ($n<=0) return 0;
        if ($n<=2) return $n;
        return self::climbStairs($n-1) + self::climbStairs($n-2);
    }
}


class Solution2 {

    public static $cache = [];
    /**
     * @param Integer $n -- 傻递归加缓存优化版 时间O(n) 空间O(n)
     * @return Integer
     */
    function climbStairs($n) {
        if (isset(self::$cache[$n])) {
            return self::$cache[$n];
        }
        if ($n<=0) return 0;
        if ($n<=2) return $n;
        self::$cache[$n] = self::climbStairs($n-1) + self::climbStairs($n-2);
        return self::$cache[$n];
    }
}


class Solution3 {

    /**
     * @param Integer $n -- 动态规划
     * @return Integer
     */
    function climbStairs($n) {
	$dp = [0,1,2]; // 3 5 8 
	for ( $i=3; $i<=$n; $i++ ) {
		$dp[$i] = $dp[$i-1] + $dp[$i-2];
	}
	return $dp[$n];
    }
}


class Solution4 {

    /**
     * @param Integer $n -- 动态规划 -- 压缩空间版
     * @return Integer
     */
    function climbStairs($n) {

	    if ($n<=0) return 0;
	    if ($n<=2) return $n;

	    $a = 1;
	    $b = 2;
	    $res = 0;
	    for ($i=3; $i<=$n; $i++) {
		    $res = $a + $b;
		    $a = $b;
		    $b = $res;
	    }

	    return $res;
    }
}


class Solution5 {

    /**
     * @param Integer $n -- 数学公式版
     * @return Integer
     */
    function climbStairs($n) {
	$sqrt5 = sqrt(5);
	$fibonacci = pow((1+$sqrt5)/2, n+1) - pow((1-$sqrt5)/2,$n+1);
	return intval($fibonacci/$sqrt5);
    }
}

$input = isset($argv[1])?$argv[1]:0;
//$a = Solution3::climbStairs($input);
$a = Solution4::climbStairs($input);
var_dump($a);
