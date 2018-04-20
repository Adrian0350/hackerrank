<?php

/*
 * Complete the staircase function below.
 */
function staircase($n) {

    $staircase = '';
    for ($level = 1; $level <= (int) $n; $level++)
    {
        $staircase .= str_repeat(' ', $n - $level).str_repeat('#', $level).PHP_EOL;
    }

    return $staircase;
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

$result = staircase($n);

echo $result;

fclose($__fp);
