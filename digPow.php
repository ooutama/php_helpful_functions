<?php
/**
 * Playing with digits
 *
 * @param integer n 
 * @param integer p
 * @return integer
 *
 * @author Outama Othmane
 */
function digPow($n, $p) {
	$p = intval($p);
    $numbers = array_map('intval', str_split($n));
    $sum = array_sum(array_map(
    function ($n, $n2) use ($p) {
    	return $n ** ($p+$n2);
    }, $numbers, array_keys($numbers)));

    return ($sum % $n !== 0) ? -1 : $sum / $n;
}