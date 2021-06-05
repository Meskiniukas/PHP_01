<?php

echo '-------- -------- 01 -------- --------<br>';
for ($ii = 0; $ii < 10; $ii++) {
    for ($i = 0; $i < 5; $i++) {
        $masyvas[$ii][$i] = rand(5, 25);
    }
}
_d($masyvas, '5-1');

echo '-------- -------- 02 a -------- --------<br>';
$countGreater10 = 0;
foreach ($masyvas as $value) {
    foreach ($value as $val) {
        $countGreater10 = $val > 10 ? ++$countGreater10 : $countGreater10;
    }
}
_d('Count of > 10 : ' . $countGreater10, '5-2a');

echo '-------- -------- 02 b -------- --------<br>';
$greatest = '';
foreach ($masyvas as $value) {
    foreach ($value as $val) {
        $greatest = $val > $greatest ? $val : $greatest;
    }
}
_d('Greatest: ' . $greatest, '5-2b');

echo '-------- -------- 02 c -------- --------<br>';
$sum_ii = 0;
for ($i = 0; $i < count($masyvas[0]); $i++) {
    for ($ii = 0; $ii < count($masyvas); $ii++) {
        $sum_ii += $masyvas[$ii][$i];
    }
    _d('Sum ii = ' . $sum_ii, '5-2c');
    $sum_ii = 0;
}

echo '-------- -------- 02 d -------- --------<br>';
foreach ($masyvas as $index_ii => &$value) {
    $value[] =  rand(5, 25);
    $value[] =  rand(5, 25);
}
_d($masyvas, '5-2d');


echo '-------- -------- 02 e -------- --------<br>';
$sum_i = 0;
foreach ($masyvas as $value) {
    foreach ($value as $val) {
        $sum_i += $val;
    }
    $masyvasNew[] = $sum_i;
    $sum_i = 0;
}
_d($masyvasNew, '5-2e');

echo '-------- -------- 03 -------- --------<br>';
$c = 'A';
$chars = [$c];
while ($c < 'Z') {
    $chars[] = ++$c;
}
for ($ii = 0; $ii < 10; $ii++) {
    $iSize = rand(2, 20);
    for ($i = 0; $i < $iSize; $i++) {
        $masyvas2[$ii][$i] = $chars[rand(0, 25)];
    }
    sort($masyvas2[$ii]);
}
// _d($chars);
_d($masyvas2, '5-3');

echo '-------- -------- 04 -------- --------<br>';
// 17 lines of program code :)
sort($masyvas2);
_d($masyvas2, '5-4');
$indexes_K_sorted = [];
foreach ($masyvas2 as $ii => $value_ii) {
    if (in_array('K', $value_ii)) {
        $indexes_K_sorted[] = $ii;
    }
}
foreach ($masyvas2 as $ii => $value_ii) {
    if (!in_array($ii, $indexes_K_sorted)) {
        $indexes_K_sorted[] = $ii;
    }
}
// _d($indexes_K_sorted);
foreach ($indexes_K_sorted as $index => $value) {
    $masyvas2_KSorted[$index] = $masyvas2[$value];
}
$masyvas2 = $masyvas2_KSorted;
_d($masyvas2, '5-4');

echo '-------- -------- 05 -------- --------<br>';
$masyvas3 = array_fill(0, 30, '');
foreach ($masyvas3 as $ii => $value_ii) {
    $masyvas3[$ii] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}
_d($masyvas3, '5-5');

echo '-------- -------- 06 -------- --------<br>';
sort($masyvas3);
_d($masyvas3, '5-6');

foreach ($masyvas3 as $ii => $row) {
    $user_id[$ii]  = $row['user_id'];
    $place_in_row[$ii] = $row['place_in_row'];
}
array_multisort($place_in_row, SORT_DESC, $user_id, SORT_ASC, $masyvas3);
_d($masyvas3, '5-6');

echo '-------- -------- 07 -------- --------<br>';
function generateString($length)
{
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string = $string . chr(rand(65, 90));
    }
    return $string;
}
foreach ($masyvas3 as $ii => $value_ii) {
    $masyvas3[$ii] += ['name' => generateString(rand(5, 15)), 'surname' => generateString(rand(5, 15))];
}
_d($masyvas3, '5-7');

echo '-------- -------- 08 -------- --------<br>';
$sum = 0;
$masyvas4 = array_fill(0, 10, '');
foreach ($masyvas4 as &$value_ii) {
    $length = rand(0, 5);
    if ($length !== 0) {
        $value_ii = array_fill(0, $length, '');
        foreach ($value_ii as $i => &$value_i) {
            $value_i = rand(0, 10);
            $sum += $value_i;
        }
    } else {
        $value_ii = rand(0, 10);
        $sum += $value_ii;
    }
}
_d($masyvas4, '5-8');

echo '-------- -------- 09 -------- --------<br>';
_d($sum, '5-9');
sort($masyvas4);
_d($masyvas4, '5-9');

echo '-------- -------- 10 -------- --------<br>';
