<?php

$trecias = 4;

$ketvirtas = $trecias / 2;

echo $ketvirtas;
echo '<br>';

echo ++$trecias;
echo '<br>';

$pirmas = 'ku ku';
$antras = 'ble ble';

$sestas = $pirmas . ' ' . $antras;
echo $sestas;
echo '<br>';

echo 'ku $pirmas kū';
echo '<br>';
echo "ku $pirmas kū";
echo '<br>';


$sk = 1;

echo ++$sk * $sk++;
echo '<br>';
// 2 * 2   REZ 4;

echo $sk++ * $sk++;
echo '<br>';
// 1 * 2    REZ 2;

echo $sk++ * ++$sk;
echo '<br>';
// 1 * 3    REZ 3;

echo ++$sk * ++$sk;
echo '<br>';
// 2 * 3    REZ 6;

$sk = 1;

echo ++$sk * $sk++;
// 2 * 2

echo $sk++ * $sk++;
// 1 * 2

echo $sk++ * ++$sk;
// 1 * 3

echo ++$sk * ++$sk;
// 2 * 3