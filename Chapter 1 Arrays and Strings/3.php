<?php
/**
 * Design an algorithm and write code to remove the duplicate
 * characters in a string without using any additional buffer
 * NOTE: One or two additional variables are fine
 * An extra copy of the array is not FOLLOW UP Write the test cases for this method
 */

function removeDuplicates($str)
{
    $strLength = strlen($str);

    if ($strLength < 2)
    {
        return $str;
    }

    $duplicatedCharactersList = [];
    $result = "";

    for ($i = 0; $i < $strLength; ++$i)
    {
        $char = $str[$i];
        if (in_array($char, $duplicatedCharactersList))
        {
            continue;
        }

        $duplicatedCharactersList[] = $char;
        $result .= $char;
    }
    return $result;
}


$noDuplicates = "abcdefgh";
assert($noDuplicates == removeDuplicates($noDuplicates));
assert("" == removeDuplicates(""));

$duplicates = "aabcccccccddaa";
$deDuplicated = "abcd";
assert($duplicates != removeDuplicates($duplicates));
assert($deDuplicated == removeDuplicates($duplicates));