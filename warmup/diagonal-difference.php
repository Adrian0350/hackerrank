<?php

/*
 * Complete the diagonalDifference function below.
 */
function diagonalDifference($a)
{
    $result1 = 0;
    foreach ($a as $row => $column)
    {
        $result1 += ($column[$row]);
    }
    $result2 = 0;
    foreach (array_reverse($a) as $row => $column)
    {
        $result2 += ($column[$row]);
    }

    return abs($result1 - $result2);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

$a = array();

for ($a_row_itr = 0; $a_row_itr < $n; $a_row_itr++) {
    fscanf($__fp, "%[^\n]", $a_temp);
    $a[] = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($a);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
