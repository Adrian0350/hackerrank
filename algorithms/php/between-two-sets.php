<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    $range_start = end($a);
    $range_end   = $b[0];
    $range_step  = $range_start;
    
    if ($range_step > $range_end)
    {
        return 0;
    }

    $range   = range($range_start, $range_end, $range_step);
    $factors = 0;
    
    for ($x = 0; $x < count($range); $x++)
    {
        $is_factor_a = true;
        foreach ($a as $n)
        {
            if ($range[$x] % $n != 0)
            {
                $is_factor_a = false;
            }
        }
        
        $is_factor_b = true;
        foreach ($b as $n)
        {
            if ($n % $range[$x] != 0)
            {
                $is_factor_b = false;
            }
        }
        
        if ($is_factor_a && $is_factor_b)
        {
            $factors++;
        }
    }

    return $factors;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);
