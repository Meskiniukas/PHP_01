<?php


function generateArray($repeatCount)
{
    static $iterations = 1;
    _d($iterations);
    $count = 3;
    foreach (range(1, $count - 1) as $index => $value) {
        $masyvas[$index] = rand(0, 10);
    }
    $iterations++;
    if ($iterations > $repeatCount) {
        $masyvas[] = 0;
        return $masyvas;
    } else {
        $masyvas[$count - 1] = generateArray($repeatCount);
    }
}

$repeatCount = 3;

$masyvas3 = generateArray($repeatCount);
_d($masyvas3, '6-7');




function generateArray2($generateCount)
{
    _d($generateCount);
    $count = 8;
    foreach (range(1, $count - 1) as $value) {
        $masyvas[] = rand(0, 10);
    }
    if ($generateCount > 0) {
        $masyvas[] = generateArray(--$generateCount);
    } else {
        $masyvas[] = 0;
    }
    return $masyvas;
}
$generateCount = 6;
_d($generateCount);
$masyvas3 = generateArray2($generateCount);
_d($masyvas3, '6-7');
