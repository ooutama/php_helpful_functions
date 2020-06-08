<?php

/**
 * You are given an array strarr of strings and an integer k. 
 * Your task is to return the first longest string consisting of k consecutive strings taken in the array.
 * -------------------------------------------------
 * @example
	longestConsec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"
 * -------------------------------------------------
 * n being the length of the string array, if n = 0 or k > n or k <= 0 return "".
 *
 * Note:
	consecutive strings : follow one after another without an interruption
*/
function longestConsec(array $strarr,int $k) {
	$n = count($strarr);
	$allStrPossible = [];

	if ($k <= 0 || $k > $n || $n === 0) return '';

	foreach ($strarr as $key => $value)
		array_push($allStrPossible, implode('', array_slice($strarr, $key, $k)));

	return $allStrPossible[array_search(max(array_map('mb_strlen', $allStrPossible)), array_map('mb_strlen', $allStrPossible))];
	
}