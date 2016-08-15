<?php
/**
 *Write a method to replace all spaces in a string with ‘%20’
 */

function replaceSpaces($str)
{
    $strAsArray = explode(" ", $str);
    return implode("%20", $strAsArray);
}

function replaceSpaces2($str)
{
    $result = "";
    for ($i = 0; $i < strlen($str); ++$i)
    {
        $resultSubstring = ($str[$i] == " ") ? "%20" : $str[$i];
        $result .= $resultSubstring;
    }
    return $result;
}


$noSpaces = "HelloWorld";
assert($noSpaces == replaceSpaces($noSpaces));
assert($noSpaces == replaceSpaces2($noSpaces));

$hasSpaces = "Hello World";
$hasSpacesAnswer = "Hello%20World";
assert($hasSpacesAnswer == replaceSpaces($hasSpaces));
assert($hasSpacesAnswer == replaceSpaces2($hasSpaces));

assert("" == replaceSpaces(""));
assert("" == replaceSpaces2(""));

$spacesString = "   ";
$spacesStringAnswer = "%20%20%20";
assert($spacesStringAnswer == replaceSpaces($spacesString));
assert($spacesStringAnswer == replaceSpaces2($spacesString));
