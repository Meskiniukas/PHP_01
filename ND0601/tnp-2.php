<?php
$size = 21;

for ($i=1; $i <= $size; $i++) {
    for ($s = $size - 1; $s >= $i; $s--){
        echo '<span style="line-height: 3px; font-size: 16px; color: white;">*</span>';
    }
    for ($j = 1; $j <= $i; $j++) {
        echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
    }
    echo '<span style="font-size: 1px;"><br></span>';
}
if ($i === $size + 1) {
    for ($i=1; $i <= $size - 1; $i++) {
       for ($s = 1; $s <= $i; $s++) {
        echo '<span style="line-height: 3px; font-size: 16px; color: white;">*</span>';
       }
       for ($j = $i; $j <= $size - 1; $j++) {
        echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
       }
       echo '<span style="font-size: 1px;"><br></span>';
    }
}
