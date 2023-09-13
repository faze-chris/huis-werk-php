<?php
function addStrings(string $string1, string $string2 = " world"): string
{
    $result = $string1 . $string2;
    return $result;
}

echo addStrings(string1: "hello", string2: " frisbee");


?>