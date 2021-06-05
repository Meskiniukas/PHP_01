<?php

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
_d($masyvas2);

echo '-------- -------- 04 -------- --------<br>';
// 17 lines of program code :)
sort($masyvas2);
_d($masyvas2);
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
_d($masyvas2);