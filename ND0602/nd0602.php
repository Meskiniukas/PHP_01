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
