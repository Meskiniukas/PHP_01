<?php

// Height and width adjustable Rhombus - 2 (Without centering with CSS)

$height = 131;
$width = 50;
$diagRatio = $width / $height;

for ($y = 0; $y < $height / 2; $y++) {
    for ($x = 0; $x < $width; $x++) {
        if (($width - $x) <= $diagRatio  * ($y + $height/2) - 1 && ($width - $x) >= $diagRatio  * ($height - ($y + $height/2)) + 1) {
            echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        } else {
            echo '<span style="line-height: 3px; font-size: 16px; color: white;">*</span>';
        }
    }
    echo '<span style="font-size: 1px;"><br></span>';
}
for ($y = $height/2; $y < $height; $y++) {
    for ($x = 0; $x < $width; $x++) {
        if (($x >= $diagRatio  * ($y - $height/2) + 1 && $x <= $diagRatio  * ($height - ($y - $height/2)) - 1) ) {
            echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        } else {
            echo '<span style="line-height: 3px; font-size: 16px; color: white;">*</span>';
        }
    }
    echo '<span style="font-size: 1px;"><br></span>';
}