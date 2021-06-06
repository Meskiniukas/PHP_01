<?php
function customStringGenerator()
{
    $string = '#%+*@裡';
    $newString = '';
    $arr = str_split($string, 5);
    $stringArray = str_split($arr[0]);
    $stringArray[] = $arr[1];
    $newStringLength = rand(1, count($stringArray));
    for ($i = 0; $i < $newStringLength; $i++) {
        $newString = $newString . $stringArray[rand(0, count($stringArray) - 1)];
    }
    return $newString;
}