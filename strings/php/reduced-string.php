<?php

$handle = fopen ("php://stdin", "r");
function super_reduced_string($s)
{
    $string_array = str_split($s);
    $iteration    = 0;


    while ($iteration < count($string_array))
    {
        $current = $iteration;
        $next    = $current + 1;

        if (isset($string_array[$next]) && $string_array[$current] === $string_array[$next])
        {
            unset($string_array[$current]);
            unset($string_array[$next]);

            $string_array = array_values($string_array);
            $iteration    = 0;
        }
        else
        {
            $iteration++;
        }
    }

    return $string_array ? implode('', $string_array) : 'Empty String';
}

fscanf($handle, "%s",$s);
$result = super_reduced_string($s);
echo $result . "\n";

?>
