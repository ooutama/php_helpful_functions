<?php

function comp($a, $b) {
	if (!is_array($a) || !is_array($b) || count($b) !== count($a)) return false;
		
	array_map(function ($fromA) {
		return $fromA * $fromA;
	}, $a);

	sort($a, SORT_NUMERIC);
	sort($b, SORT_NUMERIC);

	return $a === $b;

}

$a = [121, 144, 19, 161, 19, 144, 19, 11] ; 
$b = [132, 14641, 20736, 361, 25921, 361, 20736, 361];
var_dump(comp($a, $b));