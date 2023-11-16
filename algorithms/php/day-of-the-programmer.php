<?php

/*
 * Complete the 'dayOfProgrammer' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts INTEGER year as parameter.
 */

function dayOfProgrammer($year) {

    $calendar_type = $year >= 1918 ? CAL_GREGORIAN : CAL_JULIAN;

    // Fill in the days of months of given calendar.
    $months = array();
    for ($month = 1; $month <= 12; $month++)
    {
        $months[$month] = cal_days_in_month($calendar_type, $month, $year);
    }
    
    // The transition from the Julian to Gregorian calendar system occurred in 1918,
    // when the next day after January 31st was February 14th.
    // This means that in 1918, February 14th was the 32nd day of the year in Russia.
    if ($year === 1918 )
    {
        $months[2] = $months[2] - 13;
    } 

    $days = 0;
    $month = 0;
    foreach ($months as $m => $d)
    {
        $days += $d;
        
        if ($days >= 256)
        {
            $month = $m;
            $days -= $d;
            break;
        }
    }
    
    $day = abs($days - 256);
    
    return sprintf('%d.%02d.%d', $day, $month, $year);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);
