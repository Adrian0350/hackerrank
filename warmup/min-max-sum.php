<?php

/*
 * Complete the miniMaxSum function below.
 */
function miniMaxSum($arr) {
    sort($arr);

    $minimum = array_sum($arr) - $arr[count($arr) - 1];
    $maximum = array_sum($arr) - $arr[0];

    return "$minimum $maximum";
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo miniMaxSum($arr);

fclose($__fp);
