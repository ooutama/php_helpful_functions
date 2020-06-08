<?php

function arrayDiff($a, $b) {
	return array_values(array_diff($a, $b));
}

var_dump(arrayDiff([1,2,2,2,3],[2]));