<?php

echo '-------- -------- 01 -------- --------<br>';
for ($ii = 0; $ii < 10; $ii++) {
    for ($i = 0; $i < 5; $i++) {
        $masyvas[$ii][$i] = rand(5, 25);
    }
}
_d($masyvas);

echo '-------- -------- 02 a -------- --------<br>';
$countGreater10 = 0;
foreach ($masyvas as $value) {
    foreach ($value as $val) {
        $countGreater10 = $val > 10 ? ++$countGreater10 : $countGreater10;
    }
}
_d('Count of > 10 : ' . $countGreater10);

echo '-------- -------- 02 b -------- --------<br>';
$greatest = '';
foreach ($masyvas as $value) {
    foreach ($value as $val) {
        $greatest = $val > $greatest ? $val : $greatest;
    }
}
_d('Greatest: ' . $greatest);

echo '-------- -------- 02 c -------- --------<br>';
$sum_ii = 0;
for ($i = 0; $i < count($masyvas[0]); $i++) {
    for ($ii = 0; $ii < count($masyvas); $ii++) {
        $sum_ii += $masyvas[$ii][$i];
    }
    _d('Sum ii = ' . $sum_ii);
    $sum_ii = 0;
}

echo '-------- -------- 02 d -------- --------<br>';
foreach ($masyvas as $index_ii => &$value) {
    $value[] =  rand(5, 25);
    $value[] =  rand(5, 25);
}
_d($masyvas);


echo '-------- -------- 02 e -------- --------<br>';
$sum_i = 0;
foreach ($masyvas as $value) {
    foreach ($value as $val) {
        $sum_i += $val;
    }
    $masyvasNew[] = $sum_i;
    $sum_i = 0;
}
_d($masyvasNew);

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
_d($chars);
_d($masyvas2);

echo '-------- -------- 04 -------- --------<br>';
// 60 lines of program code :)
$indexes_min_sorted = [];
$values_min_sorted = [];
foreach ($masyvas2 as $value_ii) {
    $min_i = 21;
    foreach ($masyvas2 as $index => $value) {
        $existIndex = false;
        $existValue = false;
        foreach ($indexes_min_sorted as $valueOfIndexes) {
            if ($index === $valueOfIndexes) {
                $existIndex = true;
                break;
            }
        }
        if (!$existIndex) {
            foreach ($values_min_sorted as $sortedValue) {
                if ($sortedValue === $min_i) {
                    $existValue = true;
                    break;
                }
            }
            if (!$existValue) {
                if (count($value) < $min_i) {
                    $min_i = count($value);
                    $index_min_i = $index;
                }
            }
        }
    }
    $indexes_min_sorted[] = $index_min_i;
    $values_min_sorted[] = $min_i;
}
// _d($indexes_min_sorted);
// _d($values_min_sorted);
foreach ($indexes_min_sorted as $index => $value) {
    $masyvas2Sorted[$index] = $masyvas2[$value];
}
$masyvas2 = $masyvas2Sorted;
_d($masyvas2);
$indexes_K_sorted = [];
foreach ($masyvas2 as $ii => $value_ii) {
    foreach ($value_ii as $value) {
        if ($value === 'K') {
            $indexes_K_sorted[] = $ii;
            break;
        }
    }
}
foreach ($masyvas2 as $ii => $value_ii) {
    $inList = false;
    foreach ($indexes_K_sorted as $value) {
        if ($ii === $value) {
            $inList = true;
            break;
        }
    }
    if (!$inList) {
        $indexes_K_sorted[] = $ii;
    }
}
// _d($indexes_K_sorted);
foreach ($indexes_K_sorted as $index => $value) {
    $masyvas2_KSorted[$index] = $masyvas2[$value];
}
$masyvas2 = $masyvas2_KSorted;
_d($masyvas2);