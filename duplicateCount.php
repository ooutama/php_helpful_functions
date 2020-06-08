<?php

function duplicateCount($text) {
	return count(array_filter(array_count_values(str_split(mb_strtolower($text))), function ($count) {
		return $count > 1;
	}));
}

echo duplicateCount("ABBA");