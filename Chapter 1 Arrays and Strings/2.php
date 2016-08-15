<?php
/**
 * Write code to reverse a C-Style String  (C-String means that “abcd” is represented as five characters,
 * including the null character )
 */

//n
function reverseString($str, $index = 0)
{
    $length = strlen($str);
    if (($length == 0) || ($length == ($index - 1)))
    {
        return "";
    }

    $lastIndex = $length - $index;
    return $str[$lastIndex] . reverseString($str, $index + 1);
}

//Testing
$sampleString = "abcd";
$reversedSampleString = "dcba";
assert($reversedSampleString = reverseString($sampleString));

assert("" == reverseString(""));
assert("a" == reverseString("a"));
assert("hello" != reverseString("bye"));
