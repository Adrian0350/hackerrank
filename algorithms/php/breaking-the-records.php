<?php

/*
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

function breakingRecords($scores) {
    // Write your code here
    $min_record = 0;
    $max_record = 0;
    
    // Where by index:
    // 0 => max record
    // 1 => min record
    $records    = array(0 => 0, 1 => 0);
    
    $min_record = $scores[0];
    $max_record = $scores[0];
    
    // Discard game 1 as it is to set first-timer records only.
    unset($scores[0]);
    
    foreach ($scores as $game => $score)
    {
        if ($score < $min_record)
        {
            $min_record = $score;
            $records[1]++;
        }
        if ($score > $max_record)
        {
            $max_record = $score;
            $records[0]++;
        }
    }
    
    return $records;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$scores_temp = rtrim(fgets(STDIN));

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
