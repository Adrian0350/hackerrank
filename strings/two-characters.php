<?php

$handle = fopen ("php://stdin", "r");

function twoCharaters($string)
{
	$string_array        = str_split($string);
	$character_instances = array_count_values($string_array);
}

fscanf($handle, "%i", $l);
fscanf($handle, "%s", $s);

$result = twoCharaters($s);

echo $result.PHP_EOL;

?>
