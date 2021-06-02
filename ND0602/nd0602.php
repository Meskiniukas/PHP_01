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
for ($i = 0; $i < 200; $i++) {
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
$size = 20;
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
    $originalValuesCount = $tmp[0] !== $tmp[1] && $tmp[0] !== $tmp[2] && $tmp[1] !== $tmp[2] ? ++$originalValuesCount : $originalValuesCount;
}
foreach ($rmasyvasSum as $value) {
    echo $value . '*';
}
echo '<br><br>';
echo 'Original values count: ' . $originalValuesCount . '.';
echo '<br><br>';


// Bugs below !
$originalValuesCount_2 = 0;
for ($ii = 0; $ii < $size - 1; $ii++) {
    for ($i = $ii + 1; $i < $size; $i++) {
        if ($rmasyvasSum[$ii] === $rmasyvasSum[$i]) {
            break;
        }
    }
    $originalValuesCount_2++;
}
echo 'originalValuesCount_2: ' . $originalValuesCount_2 . '.';
echo '<br><br>';

echo '-------- -------- 05 -------- --------<br>';
