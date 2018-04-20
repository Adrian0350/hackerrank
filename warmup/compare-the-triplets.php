<?php

function solve($trippletA, $trippletB)
{
    $trippletA = array_map('intval', $trippletA);
    $trippletB = array_map('intval', $trippletB);
    $results   = array('alice' => 0, 'bob' => 0);

    foreach ($trippletA as $index => $value)
    {
        if ($trippletA[$index] > $trippletB[$index])
            $results['alice']++;
        elseif ($trippletA[$index] < $trippletB[$index])
            $results['bob']++;
    }

    return $results;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $trippletA);
$trippletA = explode(' ', $trippletA);
fscanf($__fp, "%[^\n]", $trippletB);
$trippletB = explode(' ', $trippletB);

$result = solve($trippletA, $trippletB);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($__fp);
fclose($fptr);
