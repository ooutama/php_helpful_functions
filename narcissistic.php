<?php
/**
 * Narcissistic Number
 *
 * @param integer value
 * @return boolean
 *
 * @author Outama Othmane
 */
function narcissistic(int $value): bool {
	$strlen = mb_strlen($value);
	return array_sum(array_map(function ($v) use ($strlen) {
		return $v**$strlen;
	}, str_split($value))) === $value;
}

var_dump(narcissistic(1634));