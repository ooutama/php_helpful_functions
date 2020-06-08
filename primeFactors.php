<?php

/**
 * PRIME Factors
 *
 * @param float|int
 * @return string
 *
 * @author Outama Othmane
 */
function primeFactors($n) {
	if ($n < 2) return "(".strval($n).")";
    $factors = "";
    for ($i = 2; $i <= $n; $i++) {
        $cnt = 0;
        while ($n % $i == 0) {
            $cnt++;
            $n /= $i;
        }
        if ($cnt) {
            $factors .= "(".strval($i);
            if ($cnt > 1) {
                $factors .= "**".strval($cnt);
            }
            $factors .= ")";
        }
    }
    return $factors;
}

var_dump(
	// 41**2
	// 86240 / 2**5 /5 /7**2/11
	// 17*17*93*677*5*5*5
	primeFactors(17*17*93*677)
	// nextPrime(22)
);