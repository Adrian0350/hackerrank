<?php

$handle = fopen ("php://stdin", "r");
function camelcase($s) {
    $words = 0;

    foreach (str_split($s) as $index => $char)
    {
        $words += $index === 0 && !ctype_upper($char);
        $words += ctype_upper($char) === true;
    }

    return $words;
}

fscanf($handle, "%s",$s);
$result = camelcase($s);
echo $result . "\n";

?>
