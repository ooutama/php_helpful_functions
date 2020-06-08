<?php

//NOPE
function simplify($poly)
{		
	$args = array_map(function ($v) {
		$v0 = str_split(mb_strtolower($v[0]));
		array_multisort($v0, SORT_ASC, SORT_STRING);
		$v[0] = implode("", $v0);
		return $v;
	}, preg_split('/[+\/*-]/', $poly, -1, PREG_SPLIT_OFFSET_CAPTURE));

}

var_dump(
	simplify("dc+dcba-mp-4dcba")
);