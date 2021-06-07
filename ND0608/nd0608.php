<?php
declare(strict_types = 1);
echo '-------- -------- 01 -------- --------<br>';
function text($text)
{
    return '<h1 style="color:' . '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6) . '";>' . $text . '</h1>';
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
$string = md5(strval(time()));
echo $string;
preg_match_all('!\d+!', $string, $numbers);
foreach ($numbers[0] as $key => $value) {
    echo text(strval($value));
}

echo '-------- -------- 04 -------- --------<br>';
function test(int $number)
{
    $count = 0;
    for ($i = (int) ($number / 2); $i > 1; $i--) { 
        $count = $number % $i === 0 ? ++$count : $count;
    }
    return $count;
}
echo test(72);
echo '<br><br>';

echo '-------- -------- 05 -------- --------<br>';
$size = 100;
$from = 33;
$till = 77;
for ($i = 0; $i < $size; $i++) {
    $masyvas[] = rand($from, $till);
}
_d($masyvas);
usort($masyvas, function($a, $b) {
    return test($a) <=> test($b);
});
_d($masyvas);

echo '-------- -------- 06 -------- --------<br>';