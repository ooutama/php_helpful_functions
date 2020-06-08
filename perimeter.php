<?php
/**
 * Perimeter
 *
 * @param int
 * @return int
 *
 * @author Outama Othmane
 */
function perimeter(int $n) {
	$perimeters = [0, 1];

	for ($i=2; $i < $n + 2; $i++) { 
		$perimeters[$i] = $perimeters[$i-1] + $perimeters[$i-2];
	}

	return array_sum($perimeters) * 4;
}

