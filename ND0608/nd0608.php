<?php

declare(strict_types=1);
echo '-------- -------- 01 -------- --------<br>';
function text($text)
{
    return '<h1 style="display: inline; color:' . '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6) . '";>' . ' ' . $text . ' ' . '</h1>';
}
echo text('Labas rytas');
echo '<br><br>';

echo '-------- -------- 02 -------- --------<br>';
function text2($text, $tagNo)
{
    return '<h' . $tagNo . ' style="color:' . '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6) . '";>' . $text . '</h' . $tagNo . '>';
}
echo text2('Balalaika Traktorovna', rand(1, 6));
echo '<br><br>';

echo '-------- -------- 03 -------- --------<br>';
// preg_replace_callback();

$string = md5(strval(time()));
echo $string;
preg_match_all('!\d+!', $string, $numbers);
foreach ($numbers[0] as $key => $value) {
    echo text(strval($value));
}

// Arvydo:

$h1 = function (string|array $text): string {
    if (is_array($text)) {
        $text = $text[0];
    }
    return "<h1 style=\"display:inline;\">$text</h1>";
};

$genText = md5(strval(time()));
$out = preg_replace_callback('/\d+/', $h1, $genText);
echo $out . '<br><br>';

echo '-------- -------- 04 -------- --------<br>';
function test(int $number)
{
    $count = 0;
    for ($i = (int) ($number / 2); $i > 1; $i--) {
        $count = $number % $i === 0 ? ++$count : $count;
    }
    $count = $number <= 1 ? 1 : $count;
    return $count;
}
echo test(7);
echo '<br><br>';

echo '-------- -------- 05 -------- --------<br>';
$size = 100;
$from = 33;
$till = 77;
for ($i = 0; $i < $size; $i++) {
    $masyvas[] = rand($from, $till);
}
_d($masyvas, '6-5');
usort($masyvas, function ($a, $b) {
    return test($a) <=> test($b);
});
_d($masyvas, '6-5');

echo '-------- -------- 06 -------- --------<br>';
$size = 10;
$from = 2;
$till = 29;
for ($i = 0; $i < $size; $i++) {
    $masyvas2[] = rand($from, $till);
}
_d($masyvas2, '6-6');
foreach ($masyvas2 as $key => $value) {
    if (test($value) === 0) {
        unset($masyvas2[$key]);
    }
}
_d($masyvas2, '6-6');

echo '-------- -------- 07 -------- --------<br>';

function generateArray($generateCount)
{
    $count = rand(10, 20);
    $count = 6;
    foreach (range(1, $count - 1) as $value) {
        $masyvas[] = rand(0, 10);
    }
    $masyvas[] = 0;
    if ($generateCount > 0) {
        $masyvas[$count - 1] = generateArray(--$generateCount);
    }
    return $masyvas;
}
$countToGenerate = rand(10, 30);
$countToGenerate = 10;
$masyvas3 = generateArray($countToGenerate - 1);
_dc($masyvas3, '6-7');
echo '<br><br>';

echo '-------- -------- 08 -------- --------<br>';
function sumRecursiveArray($array)
{
    static $sum = 0;
    foreach ($array as $value) {
        if (!is_array($value)) {
            $sum += $value;
        } else {
            sumRecursiveArray($value);
        }
    }
    return $sum;
}

_d(sumRecursiveArray($masyvas3), '6-8');

echo '-------- -------- 09 -------- --------<br>';
foreach (range(1, 3) as $value) {
    $masyvas4[] = rand(1, 33);
}
_d($masyvas4, '6-9');

do {
    $last3Prime = true;
    for ($i = count($masyvas4) - 1; $i >= count($masyvas4) - 3; $i--) {
        if (test($masyvas4[$i]) !== 0) {
            $last3Prime = false;
            $masyvas4[] = rand(1, 33);
        }
    }
} while (!$last3Prime);
_d($masyvas4);
echo '<br><br>';

echo '-------- -------- 10 -------- --------<br>';
function averagePrimes2dArray($array)
{
    $sumPrimes = $countPrimes = 0;

    foreach ($array as $value_ii) {
        foreach ($value_ii as $value_i) {
            if (test($value_i) === 0) {
                $sumPrimes += $value_i;
                $countPrimes++;
            }
        }
    }
    $average = $countPrimes !== 0 ? $sumPrimes / $countPrimes : 0;
    return $average;
}

function customReplaceMin2dArray(&$array)
{
    $min = 999999999;
    foreach ($array as $index_ii => $value_ii) {
        foreach ($value_ii as $index_i => $value_i) {
            if ($value_i < $min) {
                $min = $value_i;
                $minIndexX = $index_i;
                $minIndexY = $index_ii;
            }
        }
    }
    $array[$minIndexY][$minIndexX] += 3;
    return $array[$minIndexY][$minIndexX];
}

$size2d = 10;
foreach (range(0, $size2d - 1) as $ii) {
    foreach (range(0, $size2d - 1) as $i) {
        $masyvas5[$ii][$i] = rand(1, 100);
    }
}
_d($masyvas5, '6-10');
_d(averagePrimes2dArray($masyvas5), '6-10');

while (averagePrimes2dArray($masyvas5) < 70) {
    customReplaceMin2dArray($masyvas5);
}

_d($masyvas5, '6-10');
_d(averagePrimes2dArray($masyvas5), '6-10');

echo '-------- -------- 11 -------- --------<br>';
function genArr(array $masyvasNew, int $range)
{
    foreach (range(0, $range - 1) as $ix) {
        $lottery = rand(1, 10);
        if ($lottery < 8) {
            $masyvasNew[] = rand(0, 100);
        } else {
            $size2dY = 2;
            $size2dY = rand(1, 5);
            $masyvasNew[$ix] = [];
            $masyvasNew[$ix] = genArr($masyvasNew[$ix], $size2dY);
        }
    }
    return $masyvasNew;
}

function arrayMaxDepthDetect(array $array) {
    $maxDepth = 1;
    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = arrayMaxDepthDetect($value) + 1;
            $maxDepth = $depth > $maxDepth ? $depth : $maxDepth;
        }
    }
    return $maxDepth;
}

function recursiveArrayElementCount(array $array)
{
    static $count = 0;
    foreach ($array as $value) {
        if (!is_array($value)) {
            $count++;
        } else {
            recursiveArrayElementCount($value);
        }
    }
    return $count;
}

$sizeY = rand(10, 100);
$sizeY = 10;
$masyvas6 = genArr([], $sizeY);

_dc($masyvas6, '6-11');
_d(arrayMaxDepthDetect($masyvas6), '6-11. Recursive Array Max Depth = ');
_d(sumRecursiveArray($masyvas6), '6-11. Sum Recursive Array = ');
_d(recursiveArrayElementCount($masyvas6), '6-11. Recursive Array Element Count = ');
echo  '<div id=”M1”>10, 46, 67, <div id=”M2”> 89, 45, 89, 34, 90, <div id=”M3”> 84, 97 </div> 90, 56 </div> </div>';