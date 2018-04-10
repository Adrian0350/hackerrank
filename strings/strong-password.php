<?php

$handle = fopen ("php://stdin", "r");
function minimumNumber($n, $password) {
	if (!ctype_print($password))
		return $min_length;

	$password_array = str_split((string) $password);
	$min_length     = 6;
	$rules          = array(
		'numbers' => str_split('0123456789'),
		'lower_case' => str_split('abcdefghijklmnopqrstuvwxyz'),
		'upper_case' => str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
		'special_characters' => str_split('!@#$%^&*()-+')
	);

	foreach ($rules as $rule => $contains_characters)
	{
		${$rule} = count(array_intersect($password_array, $contains_characters));
	}

	$padding = count($password_array) < $min_length ? $min_length - count($password_array) : false;
	$complies_with_rules = (!$numbers || !$lower_case || !$upper_case || !$special_characters);

	return $padding ? $padding : ($complies_with_rules ? $complies_with_rules : 0);
}

fscanf($handle, "%i", $n);
fscanf($handle, "%s", $password);
$answer = minimumNumber($n, $password);
echo $answer . "\n";

?>
