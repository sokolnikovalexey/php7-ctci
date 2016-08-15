<?php
/**
 * Write a method to decide if two strings are anagrams or not
 */

function isAnagrams($str1, $str2)
{
    if (strlen($str1) == strlen($str2))
    {
        $str1AsArray = str_split($str1);
        sort($str1AsArray);
        $str2AsArray = str_split($str2);
        sort($str2AsArray);
        
        $sortedStr1 = implode("", $str1AsArray);
        $sortedStr2 = implode("", $str2AsArray);
        return ($sortedStr1 == $sortedStr2);
    }
    return false;
}


function isAnagrams2($str1, $str2)
{
    $strLen1 = strlen($str1);
    $strLen2 = strlen($str2);
    if ($strLen1 == $strLen2)
    {
        $firstStringChars = [];
        $secondStringChars = [];
        for ($i = 0; $i < $strLen1; ++$i)
        {
            $firstStringChars[$str1[$i]] += 1;
            $secondStringChars[$str2[$i]] += 1;
        }

        if (count($firstStringChars) != count($secondStringChars))
        {
            return false;
        }

        foreach ($firstStringChars as $char => $count)
        {
            if ($secondStringChars[$char] != $count)
            {
                return false;
            }
        }
        return true;
    }
    return false;
}


//Testing
$str1 = "hello";
$str2 = "olleh";
assert(isAnagrams($str1, $str2));
assert(isAnagrams2($str1, $str2));

assert(isAnagrams("", ""));
assert(isAnagrams2("", ""));

assert(!isAnagrams("hello", "hellllo"));
assert(!isAnagrams2("hello", "hellllo"));
