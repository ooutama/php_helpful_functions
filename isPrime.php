<?php

/**
 * Is Prime?
 *
 * @param integer
 * @return boolean
 */
function is_prime($n): bool {
	if (is_infinite($n) || is_nan($n) || $n%1 || $n <= 1) return false;
	if ($n%2 == 0) return ($n==2);
	
	for ($i=3; $i <= ceil(sqrt($n)); $i+=2) { 
		if ($n%$i == 0) return false;
	}
	return true;
}

function mod(int $x, int $y): int {
	return $x - (floor($x/$y) * $y);	
}

function fact(int $x): int {
	$result = 1;
	for ($i=1; $i <= $x; $i++) { 
		$result *= $i;
	}
	return $result;
}

var_dump( is_prime(92382380932344423334) );