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
            echo "<span style='line-height: 3px; font-size: 16px; color: red;'>*</span>";
        } else {
            echo "<span style='line-height: 3px; font-size: 14px; color: blue;'>*</span>";
        }
    }
    echo "<span style='font-size: 1px;'><br></span>";
}
echo '<br><br>';

echo '-------- -------- 06 -------- --------<br>';
$result = '';
while ($result !== 'H') {
    $result = rand(0, 1) === 0 ? 'H' : 'S';
    echo $result . ' ';
}
echo '<br>';
$result = '';
$hCount = 0;
while ($hCount !== 3) {
    $result = rand(0, 1) === 0 ? 'H' : 'S';
    $hCount = $result === 'H' ? ++$hCount : $hCount;
    echo $result . ' ';
}
echo '<br>';
$result = '';
$hCount = 0;
while ($hCount !== 3) {
    $result = rand(0, 1) === 0 ? 'H' : 'S';
    $hCount = $result === 'H' ? ++$hCount : 0;
    echo $result . ' ';
}
echo '<br><br>';

echo '-------- -------- 07 -------- --------<br>';
$result = '';
$winner = '';
$totalPointsKazys = 0;
$totalPointsPetras = 0;
while ($totalPointsKazys < 222 && $totalPointsPetras < 222) {
    $pointsKazys = rand (5, 25);
    $pointsPetras = rand (10, 20);
    $totalPointsKazys += $pointsKazys;
    $totalPointsPetras += $pointsPetras;
    echo 'Kazys: ' . $pointsKazys . ' points; Petras: ' . $pointsPetras . ' points. ';
    if ($pointsKazys > $pointsPetras) {
        $result = 'Kazys';
    } else {
        $result = $pointsKazys < $pointsPetras ? 'Petras' : 'Lygiosios';
    }
    if ($result !== 'Lygiosios') {
        echo 'Winner is: ' . $result . '.<br>';
    } else {
        echo 'Result is equal.<br>';
    }
    if ($totalPointsKazys >= 222 || $totalPointsPetras >= 222) {
        if ($totalPointsKazys > $totalPointsPetras) {
            $winner = 'Kazys';
        } else {
            $winner = $totalPointsKazys < $totalPointsPetras ? 'Petras' : 'Lygiosios';
        }
        if ($winner !== 'Lygiosios') {
            echo 'TOUR Winner is: ' . $winner . '. TOUR Points: Kazys: ' . $totalPointsKazys . ' points; Petras: ' . $totalPointsPetras . ' points. ';
        } else {
            echo 'TOUR Result is equal. TOUR Points: Kazys: ' . $totalPointsKazys . ' points; Petras: ' . $totalPointsPetras . ' points. ';
        }
    }
}
echo '<br><br>';

echo '-------- -------- 08 -------- --------<br>';
$dHorizontalOfRhombus = 61;
$dVerticalOfRhombus = 20;
$diagRatio = $dVerticalOfRhombus / $dHorizontalOfRhombus;
echo '<div style="text-align:center;">';
for ($ii = 0; $ii < $dVerticalOfRhombus; $ii++) {
    for ($i = 0; $i < $dHorizontalOfRhombus; $i++) {
        if ($ii >= $diagRatio  * $i + 1 && $ii <= $diagRatio  * ($dHorizontalOfRhombus - $i) - 1) {
            echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        }
    }
    echo '<span style="font-size: 1px;"><br></span>';
}
echo '</div><br>';

echo '-------- -------- 09 -------- --------<br>';







