<?php

/**
 * Order Weight
 *
 * @param string
 * @return string
 *
 * @author Outama Othmane
 */
function orderWeight($str) {
	$nums = explode(" ", $str);

	usort($nums, function ($a, $b) {
		$a1 = array_sum(str_split($a));
		$b1 = array_sum(str_split($b));

		if ($a1 === $b1) return strcmp($a, $b);

		return ($a1 < $b1) ? -1 : 1;
	});

	return implode(' ', $nums);
}


var_dump(
	orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123")
);
