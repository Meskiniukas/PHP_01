<?php

// declare(strict_types=1);
// echo '-------- -------- 01 -------- --------<br>';
// function text($text)
// {
//     return '<h1 style="color:' . '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6) . '";>' . $text . '</h1>';
// }
// echo text('Labas rytas');
// echo '<br><br>';

// echo '-------- -------- 02 -------- --------<br>';
// function text2($text, $tagNo)
// {
//     return '<h' . $tagNo . ' style="color:' . '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6) . '";>' . $text . '</h' . $tagNo . '>';
// }
// echo text2('Balalaika Traktorovna', rand(1, 6));
// echo '<br><br>';

// echo '-------- -------- 03 -------- --------<br>';
// // preg_replace_callback();

// $string = md5(strval(time()));
// echo $string;
// preg_match_all('!\d+!', $string, $numbers);
// foreach ($numbers[0] as $key => $value) {
//     echo text(strval($value));
// }

// echo '-------- -------- 04 -------- --------<br>';
// function test(int $number)
// {
//     $count = 0;
//     for ($i = (int) ($number / 2); $i > 1; $i--) {
//         $count = $number % $i === 0 ? ++$count : $count;
//     }
//     return $count;
// }
// echo test(2);
// echo '<br><br>';

// echo '-------- -------- 05 -------- --------<br>';
// $size = 100;
// $from = 33;
// $till = 77;
// for ($i = 0; $i < $size; $i++) {
//     $masyvas[] = rand($from, $till);
// }
// _d($masyvas, '6-5');
// usort($masyvas, function ($a, $b) {
//     return test($a) <=> test($b);
// });
// _d($masyvas, '6-5');

// echo '-------- -------- 06 -------- --------<br>';
// $size = 10;
// $from = 2;
// $till = 29;
// for ($i = 0; $i < $size; $i++) {
//     $masyvas2[] = rand($from, $till);
// }
// _d($masyvas2, '6-6');
// foreach ($masyvas2 as $key => $value) {
//     if (test($value) === 0) {
//         unset($masyvas2[$key]);
//     }
// }
// _d($masyvas2, '6-6');

echo '-------- -------- 07 -------- --------<br>';

function generateArray($generateCount)
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
$masyvas3 = generateArray($generateCount);
_d($masyvas3, '6-7');
