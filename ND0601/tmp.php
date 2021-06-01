<?php

for ($ii = 0; $ii < $dVerticalOfRhombus; $ii++) {
    for ($i = 0; $i < $dHorizontalOfRhombus; $i++) {
        if ($ii >= $dVerticalOfRhombus / $dHorizontalOfRhombus  * ($i - 9) && $ii <= $dVerticalOfRhombus / $dHorizontalOfRhombus  * ($dHorizontalOfRhombus - ($i - 9))) {
            echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        } else {
            echo "<span style='line-height: 3px; font-size: 16px; color: yellow;'>*</span>";
        }
    echo '<span style="font-size: 1px;"><br></span>';
    }
}
