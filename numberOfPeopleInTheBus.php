<?php

/**
 * Number of people in the bus
 *
 * @param array
 * @return int
 *
 * @author Outama Othmane
 */
function number($bus_stops) {
	$rest = 0;

	foreach ($bus_stops as $array)
		$rest += $array[0] - $array[1]; 

	return $rest;
}