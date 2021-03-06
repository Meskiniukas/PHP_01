<?php

echo '-------- -------- 01 -------- --------<br>';
for ($i = 0; $i < 30; $i++) {
    $masyvas[] = rand(5, 25);
}

echo '-------- -------- 02 a -------- --------<br>';
$greaterThan10Count = 0;
foreach ($masyvas as $value) {
    $greaterThan10Count = $value > 10 ? ++$greaterThan10Count : $greaterThan10Count;
    echo $value . '*';
}
echo '<br><br> greaterThan10Count: ' . $greaterThan10Count . '<br><br>';

echo '-------- -------- 02 b -------- --------<br>';
$greatestValue = 0;
$indexOfGreatestValue = '';
foreach ($masyvas as $index => $value) {
    if ($value > $greatestValue) {
        $greatestValue = $value;
        $indexOfGreatestValue = $index;
    }
}
echo 'Greatest Value is: ' . $greatestValue . '. Index: ' . $indexOfGreatestValue . '.<br><br>';

echo '-------- -------- 02 c -------- --------<br>';
$sum = 0;
foreach ($masyvas as $index => $value) {
    if ($index % 2 === 0) {
        $sum += $value;
    }
}
echo 'Sum of even index Values is: ' . $sum . '.<br><br>';

echo '-------- -------- 02 d -------- --------<br>';
foreach ($masyvas as $index => $value) {
    $masyvas2[] = $value - $index;
}
foreach ($masyvas2 as $value) {
    echo $value . '*';
}
echo '<br><br>';

echo '-------- -------- 02 e -------- --------<br>';
for ($i = 0; $i < 10; $i++) {
    $masyvas[] = rand(5, 25);
}
foreach ($masyvas as $value) {
    echo $value . '*';
}
echo '<br><br>';

echo '-------- -------- 02 f -------- --------<br>';
foreach ($masyvas as $index => $value) {
    if ($index % 2 === 0) {
        $masyvasEven[] = $value;
    } else {
        $masyvasOdd[] = $value;
    }
}
echo 'masyvasEven: ';
foreach ($masyvasEven as $value) {
    echo $value . '*';
}
echo '<br><br>';
echo 'masyvasOdd: ';
foreach ($masyvasOdd as $value) {
    echo $value . '*';
}
echo '<br><br>';

echo '-------- -------- 02 g -------- --------<br>';
foreach ($masyvas as $index => $value) {
    if ($index % 2 === 0) {
        $masyvas[$index] = $value > 15 ? 0 : $masyvas[$index];
    }
}
foreach ($masyvas as $value) {
    echo $value . '*';
}
echo '<br><br>';

echo '-------- -------- 02 h -------- --------<br>';
$indexA = '';
$valueA = '';
foreach ($masyvas as $index => $value) {
    if ($value > 10) {
        break;
    }
}
echo 'Index of first element > 10: ' . $index . '. Value is: ' . $value . '.<br><br>';

echo '-------- -------- 02 i -------- --------<br>';
foreach ($masyvas as $index => $value) {
    if ($index % 2 === 0) {
        unset($masyvas[$index]);
    }
}
foreach ($masyvas as $value) {
    echo $value . '*';
}
echo '<br><br>';

echo '-------- -------- 03 -------- --------<br>';
$letters = ['A', 'B', 'C', 'D'];
$size = 20;
for ($i = 0; $i < $size; $i++) {
    $rmasyvas[] = $letters[rand(0, 3)];
}
$aCount = 0;
$bCount = 0;
$cCount = 0;
$dCount = 0;
foreach ($rmasyvas as $value) {
    if ($value === 'A') {
        $aCount++;
    } elseif ($value === 'B') {
        $bCount++;
    } elseif ($value === 'C') {
        $cCount++;
    } else {
        $dCount++;
    }
}
echo 'aCount: ' . $aCount . '; bCount: ' . $bCount . '; cCount: ' . $cCount . '; dCount: ' . $dCount . '.<br><br>';

echo '-------- -------- 04 -------- --------<br>';
sort($rmasyvas);
foreach ($rmasyvas as $value) {
    echo $value . '*';
}
echo '<br><br>';

echo '-------- -------- 05 -------- --------<br>';
$size = 5;
for ($i = 0; $i < $size; $i++) {
    $rmasyvas1[] = $letters[rand(0, 3)];
    $rmasyvas2[] = $letters[rand(0, 3)];
    $rmasyvas3[] = $letters[rand(0, 3)];
}
for ($i = 0; $i < $size; $i++) {
    $rmasyvasSum[$i] = $rmasyvas1[$i] . $rmasyvas2[$i] . $rmasyvas3[$i];
}

$originalValuesCount = 0;
foreach ($rmasyvasSum as $index => $value) {
    $tmp = str_split($value);
    if ($tmp[0] !== $tmp[1] && $tmp[0] !== $tmp[2] && $tmp[1] !== $tmp[2]) {
        $count = 0;
        for ($i = $index + 1; $i < count($rmasyvasSum); $i++) {
            if ($value === $rmasyvasSum[$i]) {
                $count++;
            }
        }
        $originalValuesCount = $count === 0 ? ++$originalValuesCount : $originalValuesCount;
    }
}
foreach ($rmasyvasSum as $value) {
    echo $value . '*';
}
echo '<br><br>';
echo 'Number of non repeatable values made up of the original characters: ' . $originalValuesCount . '.';
echo '<br><br>';

$originalValuesCount_2 = 0;
foreach ($rmasyvasSum as $key_ii => $value_ii) {
    $count = 0;
    for ($i = $key_ii + 1; $i < count($rmasyvasSum); $i++) {
        if ($value_ii === $rmasyvasSum[$i]) {
            $count++;
        }
    }
    $originalValuesCount_2 = $count === 0 ? ++$originalValuesCount_2 : $originalValuesCount_2;
}
echo 'OriginalValuesCount: ' . $originalValuesCount_2 . '.';
echo '<br><br>';

echo '-------- -------- 06 -------- --------<br>';
$masyvas2 = $masyvas3 = [];
$arrayCount = 10;
$from = 1;
$till = 20;
for ($i = 0; $i < $arrayCount; $i++) {
    do $newElement = rand($from, $till);
    while (in_array($newElement, $masyvas2));
    $masyvas2[] = $newElement;
    do $newElement = rand($from, $till);
    while (in_array($newElement, $masyvas3));
    $masyvas3[] = $newElement;
}
_d($masyvas2, '4-6');
_d($masyvas3, '4-6');

echo '-------- -------- 07 -------- --------<br>';
foreach ($masyvas2 as $key => $value) {
    if (!in_array($value, $masyvas3)) {
        $masyvas4[] = $value;
    }
}
_d($masyvas4, '4-7');

echo '-------- -------- 08 -------- --------<br>';
foreach ($masyvas2 as $key => $value) {
    if (in_array($value, $masyvas3)) {
        $masyvas5[] = $value;
    }
}
_d($masyvas5, '4-8');

echo '-------- -------- 09 -------- --------<br>';
foreach ($masyvas2 as $key => $value) {
    $masyvas6[$value] = $masyvas3[$key];
}
_d($masyvas6, '4-9');

echo '-------- -------- 10 -------- --------<br>';
$arrayCount = 10;
$masyvas7[] = rand(5, 25);
$masyvas7[] = rand(5, 25);
for ($i = 2; $i < $arrayCount; $i++) {
    $masyvas7[] = $masyvas7[$i - 2] + $masyvas7[$i - 1];
}
_d($masyvas7, '4-10');

echo '-------- -------- 11 -------- --------<br>';
$arrayCount = 15;
$arrayCount = $arrayCount % 2 === 0 ? ++$arrayCount : $arrayCount;
$from = 1;
$till = 15;
for ($i = 0; $i < $arrayCount; $i++) {
    $masyvas8[] = rand($from, $till);
}
_d($masyvas8, '4-11');
foreach ($masyvas8 as $key_ii => &$value_ii) {
    do {
        $repeat = false;
        for ($i = $key_ii - 1; $i >= 0; $i--) {
            if ($value_ii === $masyvas8[$i]) {
                $repeat = true;
                $value_ii = rand($from, $till);
            }
        }
        for ($i = $key_ii + 1; $i < count($masyvas8); $i++) {
            if ($value_ii === $masyvas8[$i]) {
                $repeat = true;
                $value_ii = rand($from, $till);
            }
        }
    } while ($repeat);
}
_d($masyvas8, '4-11');

rsort($masyvas8);
_d($masyvas8, '4-11');
$sumFirstHalf = $sumSecondHalf = 0;
$center = ($arrayCount + 1)/ 2 - 1;
$masyvas9[$center] = $masyvas8[0];

for ($i = $center + 1; $i > 0; $i--) {
    if ($center - $i >= 0) {
        $masyvas9[$center - $i] = $masyvas8[$i * 2];
        $sumFirstHalf += $masyvas8[$i * 2];
    }
}

for ($i= 1; $i < $center + 1; $i++) { 
    $masyvas9[$center + $i] = $masyvas8[$i * 2 - 1];
    $sumSecondHalf += $masyvas8[$i * 2 - 1];
}

$masyvas8 = $masyvas9;
_d($masyvas8, '4-11');
_d('= Sum of First Half', $sumFirstHalf);
_d('= Sum of Second Half', $sumSecondHalf);
