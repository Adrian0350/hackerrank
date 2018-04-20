<?php

/*
 * Complete the birthdayCakeCandles function below.
 */
function birthdayCakeCandles($n, $ar) {
    sort($ar);
    $tallest = $ar[count($ar) - 1];
    $ar      = array_count_values($ar);

    return $ar[$tallest];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

fscanf($__fp, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($n, $ar);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
