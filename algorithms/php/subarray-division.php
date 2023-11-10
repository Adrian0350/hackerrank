<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m) {

    $pieces_given = 0;
    $index        = 0; // Marker to know where we are in the chocolate square [index].
    do
    {
        $sums    = 0;
        $counter = 0;
        foreach ($s as $number)
        {
            // If counter reaches the segment size, break foreach.
            if ($counter === $m)
            {
                break;
            }
            
            // Sum $m number of numbers ($m = segment size).
            $sums += $number;
            
            $counter++;
        }
        
        // If the segment's total sum equals the day size, give a chocolate.
        if ($sums === $d)
        {
            $pieces_given++;
        }

        // Unset current index so it is not counter for.
        unset($s[$index]);
        $index++;
    }
    while(count($s) >= $m); // The while will only last until the size of the array is greater or equal to that of $m, the month or the segment size of the chocolate.
    
    return $pieces_given;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
