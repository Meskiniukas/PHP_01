<?php

echo '-------- -------- 01 -------- --------<br>';
$name = 'Jonas';
$surname = 'Petraitis';
if (strlen($name) < strlen($surname)) {
    echo "$name $surname. Shorter string: $name.";
} elseif (strlen($name) === strlen($surname)) {
    echo "$name $surname. Strings are equal.";
} else {
    echo "$name $surname. Shorter string: $surname.";
}
echo '<br><br>';

echo '-------- -------- 02 -------- --------<br>';
$name = 'Jonas';
$surname = 'Petraitis';
echo "$name $surname. Modified string: " . strtoupper($name) . " " . strtolower($surname) . ".";
echo '<br><br>';

echo '-------- -------- 03 -------- --------<br>';
$name = 'Jonas';
$surname = 'Petraitis';
echo "$name $surname. Initial character of each string: " . $name[0] . $surname[0] . ".";
echo '<br><br>';

echo '-------- -------- 04 -------- --------<br>';
$name = 'Jonas';
$surname = 'Petraitis';
$threeLastCharacters = substr($name, -3, 3) . substr($surname, -3, 3);
echo "$name $surname. Three last characters of each string: $threeLastCharacters.";
echo '<br><br>';

echo '-------- -------- 05 -------- --------<br>';
$name = 'An American in Paris';
echo "Name: $name. ";
$name = str_replace('a', '*', $name);
$name = str_replace('A', '*', $name);
echo "Name with replaced characters: $name.";
echo '<br><br>';

echo '-------- -------- 06 -------- --------<br>';
$name = 'An American in Paris';
$count = substr_count($name, 'a') + substr_count($name, 'A');
echo "Name: $name. Count of substrings 'A' and 'a' is: $count.";
echo '<br><br>';

echo '-------- -------- 07 -------- --------<br>';
$name = 'An American in Paris';
$charsToReplace = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
$newName = str_replace($charsToReplace, '', $name);
echo "Name: $name. Name with removed vowels: $newName.<br>";
$name = "Breakfast at Tiffany's";
$newName = str_replace($charsToReplace, '', $name);
echo "Name: $name. Name with removed vowels: $newName.<br>";
$name = '2001: A Space Odyssey';
$newName = str_replace($charsToReplace, '', $name);
echo "Name: $name. Name with removed vowels: $newName.<br>";
$name = "It's a Wonderful Life";
$newName = str_replace($charsToReplace, '', $name);
echo "Name: $name. Name with removed vowels: $newName.";
echo '<br><br>';

echo '-------- -------- 08 -------- --------<br>';
$string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
preg_match_all('!\d+!', $string, $episodeNumber);
echo $string . '<br>Episode Nr. ' . $episodeNumber[0][0] . '.';
echo '<br><br>';

echo '-------- -------- 09 -------- --------<br>';
$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$stringParts = explode(' ', $string);
$stringCount = 0;
foreach ($stringParts as $str) {
    if (strlen($str) <= 5) {
        $stringCount++;
    }
}
echo "$string<br>The number of words shorter or equal to 5 characters is: $stringCount.<br><br>";

$string = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$charsToReplace = array('ą', 'č', 'ę', 'ė', 'į', 'š', 'ų', 'ū', 'ž', 'Ą', 'Č', 'Ę', 'Ė', 'Į', 'Š', 'Ų', 'Ū', 'Ž');
$newString = str_replace($charsToReplace, '*', $string);
$stringParts = explode(' ', $newString);
$stringCount = 0;
foreach ($stringParts as $str) {
    if (strlen($str) <= 5) {
        $stringCount++;
    }
}
echo "$string<br>The number of words shorter or equal to 5 characters is: $stringCount.<br>";
echo '<br><br>';

echo '-------- -------- 10 -------- --------<br>';

