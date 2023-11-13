<?php

/*
 * Complete the 'divisibleSumPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER k
 *  3. INTEGER_ARRAY ar
 */

function divisibleSumPairs($n, $k, $ar) {
    $divisible_pairs = 0;
    for ($i = 0; $i <= count($ar); $i++)
    {
        // By making $j be $i + 1 you integrate condition $i < $j.
        for ($j = $i + 1; $j <= count($ar) - 1; $j++)
        {
            $is_divisible = ($ar[$i] + $ar[$j]) % $k === 0;
            if ($is_divisible)
            {
                $divisible_pairs++;
            }
        }
    }
    
    
    return $divisible_pairs;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
