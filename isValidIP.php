<?php

/**
 * IP Validation
 *
 * @param string
 * @return bool
 *
 * @author Outama Othmane
 */
function isValidIP(string $str)
{
	// if (preg_match('/^([0-9]{1,3}\.){3}([0-9]{1,3})$/', $str) === 0 ) return false;

 // 	return count(array_filter(explode('.', $str), function (string $number) {
 // 		return !($number > 255 || $number < 0 || (mb_strlen($number) > 1 && strpos($number, '0') === 0));
 // 	})) === 4;

	return filter_var($str, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
}

var_dump(
	isValidIP('123.43.123.123')
);