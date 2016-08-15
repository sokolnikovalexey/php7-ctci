<?php
/**
 * 1.1 Implement an algorithm to determine if a string has all unique characters
 * What if you can not use additional data structures?
 */

//n^2 without additional data structures
function allCharactersAreUnique($str)
{
    $inputLength = strlen($str);
    for ($i = 0; $i < $inputLength; ++$i)
    {
        for ($j = 0; $j < $inputLength; ++$j)
        {
            if (($i != $j) && ($str[$i] == $str[$j]))
            {
                return false;
            }
        }
    }
    return true;
}
//n^2 with additional structures
function allCharactersAreUnique2($str)
{
    $uniqueCharsArray = [];
    for ($i = 0; $i < strlen($str); ++$i)
    {
        if (in_array($str[$i] , $uniqueCharsArray))
        {
            return false;
        }
        $uniqueCharsArray[] = $str[$i];
    }
    return true;
}

//Testing
$uniqueString = "abcdefg";
$notUniqueString = "helloworld";

assert(allCharactersAreUnique($uniqueString));
assert(!allCharactersAreUnique($notUniqueString));

assert(allCharactersAreUnique2($uniqueString));
assert(!allCharactersAreUnique2($notUniqueString));