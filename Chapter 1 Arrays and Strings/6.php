<?php
/**
 * Given an image represented by an NxN matrix, where each pixel in the image is 4 bytes,
 * write a method to rotate the image by 90 degrees  Can you do this in place?
 */

/**
 * @param $matrix
 * @return array
 */
function rotateMatrix90($matrix)
{
    $rotatedMatrix = [];
    $matrixLength = count($matrix);
    $lastElementIndex = $matrixLength - 1;

    for ($i = 0; $i < $matrixLength; ++$i)
    {
        for ($j = 0; $j < $matrixLength; ++$j)
        {
            $rotatedMatrix[$j][$lastElementIndex - $i] = $matrix[$i][$j];
        }
    }
    return $rotatedMatrix;
}

function printArray($arr)
{
    $arrayLength = count($arr);
    for ($i = 0; $i < $arrayLength; ++$i)
    {
        for ($j = 0; $j < $arrayLength; ++$j)
        {
            echo ($arr[$i][$j] . " ");
        }
        echo(PHP_EOL);
    }
}

$testData = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$result = rotateMatrix90($testData);
printArray($result);