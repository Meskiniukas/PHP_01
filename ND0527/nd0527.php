<?php

$name = 'Tomas';
$surname = 'Vaitkus';
$yearBorn = 1969;
$yearNow = 2021;

echo '-------- -------- 01 -------- --------<br>';
echo "Aš esu $name $surname. Man yra " . $yearNow - $yearBorn . " metai. <br><br>";

echo '-------- -------- 02 -------- --------<br>';
$var1 = rand(0, 4);
$var2 = rand(0, 4);
$divzero = false;
if ($var1 > $var2) {
    if ($var2 !== 0) {
        $result = $var1 / $var2;
    } else {
        $divzero = true;
        echo "var1 = $var1; var2 = $var2; mažesnis skaičius = 0; dalyba iš 0 negalima!";
    }
} elseif ($var1 !==0) {
    $result = $var2 / $var1;
    } else {
        $divzero = true;
        echo "var1 = $var1; var2 = $var2; mažesnis skaičius = 0; dalyba iš 0 negalima!";
    }

if(!$divzero) {
    echo "var1 = $var1; var2 = $var2; Rezultatas:" . round($result, 2) . ";";
}
echo '<br><br>';

echo '-------- -------- 03 -------- --------<br>';
$var1 = rand(0, 25);
$var2 = rand(0, 25);
$var3 = rand(0, 25);
$midle = true;
if ($var1 > $var2 && $var1 < $var3 || $var1 < $var2 && $var1 > $var3) {
    $result = $var1;
} elseif ($var2 > $var1 && $var2 < $var3 || $var2 < $var1 && $var2 > $var3) {
    $result = $var2;
} elseif ($var3 > $var2 && $var3 < $var1 || $var3 < $var2 && $var3 > $var1) {
    $result = $var3;
} else {
    $midle = false;
}
if (!$midle) {
    echo "var1 = $var1; var2 = $var2; var3 = $var3; Vidurinio skaičiaus nėra!";
} else {
    echo "var1 = $var1; var2 = $var2; var3 = $var3; Vidurinis skaičius $result.";
}
echo '<br><br>';

echo '-------- -------- 04 -------- --------<br>';
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "a = $a; b = $b; c = $c; Trikampį sudaryti galima.";
} else {
    echo "a = $a; b = $b; c = $c; Trikampio sudaryti NEgalima.";
}
echo '<br><br>';

echo '-------- -------- 05 -------- --------<br>';
$var1 = rand(0, 2);
$var2 = rand(0, 2);
$var3 = rand(0, 2);
$var4 = rand(0, 2);
$count0 = 0;
$count1 = 0;
$count2 = 0;
if ($var1 === 0) {
    $count0++;
} elseif ($var1 === 1) {
    $count1++;
} else {
    $count2++;
}
if ($var2 === 0) {
    $count0++;
} elseif ($var2 === 1) {
    $count1++;
} else {
    $count2++;
}
if ($var3 === 0) {
    $count0++;
} elseif ($var3 === 1) {
    $count1++;
} else {
    $count2++;
}
if ($var4 === 0) {
    $count0++;
} elseif ($var4 === 1) {
    $count1++;
} else {
    $count2++;
}
echo "var1 = $var1; var2 = $var2; var3 = $var3; var4 = $var4.  Kiekis 0: $count0; kiekis 1: $count1; kiekis 2: $count2.";
echo '<br><br>';

echo '-------- -------- 06 -------- --------<br>';
$number = rand(1, 6);
echo "<h$number>$number</h$number>";

echo '-------- -------- 07 -------- --------<br>';
$number1 = rand(-10, 10);
$number2 = rand(-10, 10);
$number3 = rand(-10, 10);
$color1 = $number1 < 0 ? 'green' : ($number1 > 0 ? 'blue' : 'red');
$color2 = $number2 < 0 ? 'green' : ($number2 > 0 ? 'blue' : 'red');
$color3 = $number3 < 0 ? 'green' : ($number3 > 0 ? 'blue' : 'red');

echo "<font color='$color1'>Skaičius1 = " . $number1 . "; </font>";
echo "<font color='$color2'>Skaičius2 = " . $number2 . "; </font>";
echo "<font color='$color3'>Skaičius3 = " . $number3 . ".</font>";
echo '<br><br>';

echo '-------- -------- 08 -------- --------<br>';
$unitPrice = 1;
$candleCount = rand(5, 3000);
$candlesPrice = $candleCount * $unitPrice;
if ($candlesPrice > 2000) {
    $candlesPrice = $candlesPrice * 0.96;
} elseif ($candlesPrice > 1000) {
    $candlesPrice = $candlesPrice * 0.97;
}
echo "Žvakių kiekis: $candleCount; 1 žvakės kaina: " . $candlesPrice / $candleCount . "€; Suma už žvakes: $candlesPrice €.";
echo '<br><br>';

echo '-------- -------- 09 -------- --------<br>';
$var1 = rand(0, 100);
$var2 = rand(0, 100);
$var3 = rand(0, 100);
$qty = 3;
echo "Skaičius1 = $var1; Skaičius2 = $var2; Skaičius3 = $var3; ";
$average = ($var1 + $var2 + $var3) / 3;
if ($var1 < 10 || $var1 > 90) {
    $var1 = 0;
    $qty--;
}
if ($var2 < 10 || $var2 > 90) {
    $var2 = 0;
    $qty--;
}
if ($var3 < 10 || $var3 > 90) {
    $var3 = 0;
    $qty--;
}
if ($qty !== 0) {
    $averageConditional = ($var1 + $var2 + $var3) / $qty;
}
echo "Aritmetinis trijų skaičių vidurkis = $average.<br>";
if ($qty !== 0) {
echo "Aritmetinis $qty skaičių vidurkis (be reikšmių <10 ir >90) = $averageConditional.";
} else {
    echo "Aritmetinio vidurkio be reikšmių <10 ir >90 paskaičiuoti negalima!";
}
echo '<br><br>';

echo '-------- -------- 10 -------- --------<br>';
$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
$number = rand(0, 300);
echo "Old Time: $hours : $minutes : $seconds<br>";
$seconds += $number % 60;
$minutes += intval($number / 60);
if ($seconds > 59) {
    $minutes++;
    $seconds -= 60;
}
if ($minutes > 59) {
    $hours++;
    $minutes -= 60;
}
if ($hours >23) {
    $hours -= 24;
}
echo "New Time: $hours : $minutes : $seconds<br>Number of added seconds = $number.";
echo '<br><br>';

echo '-------- -------- 11 -------- --------<br>';
$var1 = rand(1000, 9999);
$var2 = rand(1000, 9999);
$var3 = rand(1000, 9999);
$var4 = rand(1000, 9999);
$var5 = rand(1000, 9999);
$var6 = rand(1000, 9999);
echo "Skaičius1 = $var1; Skaičius2 = $var2; Skaičius3 = $var3; Skaičius4 = $var4; Skaičius5 = $var5; Skaičius6 = $var6.<br>";

$string = strval($var1) . ' ' . strval($var2) . ' ' . strval($var3) . ' ' . strval($var4) . ' ' . strval($var5) . ' ' . strval($var6) . ' ';
$stringParts = str_split($string, 5);
rsort($stringParts);
echo 'String of descending variables: ' . implode($stringParts) . '<br><br>';

echo '-------- -------- 11 PRIMITIVE -------- --------<br>';
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var1 < $var3) {
    $temp = $var1;
    $var1 = $var3;
    $var3 = $temp;
}
if ($var1 < $var4) {
    $temp = $var1;
    $var1 = $var4;
    $var4 = $temp;
}
if ($var1 < $var5) {
    $temp = $var1;
    $var1 = $var5;
    $var5 = $temp;
}
if ($var1 < $var6) {
    $temp = $var1;
    $var1 = $var6;
    $var6 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var2 < $var4) {
    $temp = $var2;
    $var2 = $var4;
    $var4 = $temp;
}
if ($var2 < $var5) {
    $temp = $var2;
    $var2 = $var5;
    $var5 = $temp;
}
if ($var2 < $var6) {
    $temp = $var2;
    $var2 = $var6;
    $var6 = $temp;
}
if ($var3 < $var4) {
    $temp = $var3;
    $var3 = $var4;
    $var4 = $temp;
}
if ($var3 < $var5) {
    $temp = $var3;
    $var3 = $var5;
    $var5 = $temp;
}
if ($var3 < $var6) {
    $temp = $var3;
    $var3 = $var6;
    $var6 = $temp;
}
if ($var4 < $var5) {
    $temp = $var4;
    $var4 = $var5;
    $var5 = $temp;
}
if ($var4 < $var6) {
    $temp = $var4;
    $var4 = $var6;
    $var6 = $temp;
}
if ($var5 < $var6) {
    $temp = $var5;
    $var5 = $var6;
    $var6 = $temp;
}
$string = strval($var1) . ' ' . strval($var2) . ' ' . strval($var3) . ' ' . strval($var4) . ' ' . strval($var5) . ' ' . strval($var6) . ' ';
echo "String of descending variables: $string";
echo '<br><br>';