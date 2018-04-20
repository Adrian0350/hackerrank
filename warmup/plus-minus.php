<?php

/*
 * Complete the plusMinus function below.
 */
function plusMinus($arr)
{
    $total     = count($arr);
    $positives = $negatives = $zeroes = 0;

    foreach ($arr as $number)
    {
        if ($number > 0)
            $positives++;
        if ($number < 0)
            $negatives++;
        if ($number == 0)
            $zeroes++;
    }

    return implode(PHP_EOL, array(
        number_format($positives / $total, 6),
        number_format($negatives / $total, 6),
        number_format($zeroes / $total, 6),
    ));
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

fscanf($__fp, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = plusMinus($arr);
echo $result;

fclose($__fp);
