<?php

/*
 * Complete the aVeryBigSum function below.
 */
function aVeryBigSum($n, $ar)
{
    $result = 0;
    foreach ($ar as $number)
    {
        $result += $number;
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

fscanf($__fp, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($n, $ar);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
