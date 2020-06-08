<?php

/**
 * Alphabet Position
 *
 * Replace every letter with its position in the alphabet.
 *
 * @param string
 * @return string
 * @author Outama Othmane
 */
function alphabet_position(string $s): string {
	return implode(" ", array_filter(array_map(function ($char) {
		return array_search($char, str_split('_abcdefghijklmnopqrstuvwxyz'));
	}, str_split(mb_strtolower($s)))));
}

echo alphabet_position('The sunset sets at twelve o\' clock.');