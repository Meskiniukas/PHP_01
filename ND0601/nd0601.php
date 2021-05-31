<?php

echo '-------- -------- 01 -------- --------<br>';
$string = '';
$length = 400;
for ($i = 0; $i < $length; $i++) {
    $string = $string . '*';
}
echo "<h1 style='color: red; overflow-wrap: break-word; font-size: 26px;'>$string</h1>";
$columnWidth = 50;
for ($ii = 0; $ii < $length / $columnWidth; $ii++) {
    $string = '';
    for ($i = 0; $i < $columnWidth; $i++) {
        $string = $string . '*';
    }
    echo "<h1 style='color: green; overflow-wrap: break-word; font-size: 26px;'>$string</h1>";
}

echo '-------- -------- 02 -------- --------<br>';
$numbersCount = 300;
$numbers[] = '';
$count = 0;
for ($i = 0; $i < $numbersCount; $i++) {
    $numbers[] = rand(0, 300);
    if ($numbers[$i] > 150) {
        $count++;
    }
}
foreach($numbers as $number) {
    if ($number > 275) {
        echo "<font color='red'>" . $number . " </font>";
    }
    echo $number . ' ';
}
echo "<br><br>Number of numbers greater than 150: $count.<br><br>";

echo '-------- -------- 03 -------- --------<br>';
$string = '';
$limit = rand(3000, 4000);
// echo $limit . '<br>';
for ($i = 1; $i <= $limit; $i++) {
    if ($i % 77 === 0) {
        $string = $i >= $limit - 76 ? $string . $i : $string . $i . ', ';
    }
}
echo $string;
echo '<br><br>';

echo '-------- -------- 04 -------- --------<br>';
$string = '';
$columnWidth = 100;
for ($ii = 0; $ii < $columnWidth; $ii++) {
    $string = '';
    for ($i = 0; $i < $columnWidth; $i++) {
        $string = $string . '*';
    }
    echo "<div style='color: blue; line-height: 7px; font-size: 14px;'>$string</div>";
}
echo '<br><br>';

echo '-------- -------- 05 -------- --------<br><br>';
$columnWidth = 100;
for ($ii = 0; $ii < $columnWidth; $ii++) {
    for ($i = 0; $i < $columnWidth; $i++) {
        if ($i === $columnWidth - $ii - 1 || $ii === $i) {
            echo "<span style='line-height: 3px; font-size: 20px;'><font color='red';>*</font></span>";
        } else {
            echo "<span style='line-height: 3px; font-size: 18px;'><font color='blue';>*</font></span>";
        }
    }
    echo "<span style='font-size: 1px;'><br></span>";
}
echo '<br><br>';

echo '-------- -------- 06 -------- --------<br>';
