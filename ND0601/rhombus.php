<?php

// Height and width adjustable Rhombus

$dHorizontalOfRhombus = 101;
$dVerticalOfRhombus = 30;
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