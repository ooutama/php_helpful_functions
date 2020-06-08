<?php
/**
 * Reverse polish notation calculator
 *
 * @param string 
 * @return float
 *
 * @author Outama Othmane
 */

function calc(string $expr) {
	if (trim($expr) == '') return 0;

	$tokens = [];
	foreach (explode(" ", $expr) as $token) {
		if (is_numeric($token)) array_push($tokens, $token);
		else {
			$u = array_pop($tokens);
			$v = array_pop($tokens);

			switch ($token) {
				case '+': array_push($tokens, $v+$u); break;
		        case '-': array_push($tokens, $v-$u); break;
		        case '*': array_push($tokens, $v*$u); break;
		        case '/': array_push($tokens, $v/$u); break;
			}
		}
	}
	return array_pop($tokens);
}

// (5 + ((1+2) * 4)) - 3
var_dump(
	// calc('4999 6 +')
	calc('5 1 2 + 4 * + 3 -')
);
