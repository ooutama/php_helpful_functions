<?php
/**
 * Find the missing letter
 *
 * @param array
 * @return string
 *
 * @author Outama Othmane
 */
function find_missing_letter(array $array): string {
	return implode("", array_diff(range(reset($array), end($array)), $array));
}

var_dump(
	find_missing_letter(array('A','B','C', 'F'))
);
