<h2>*** 5-4:</h2>
<?php
$arr = array_fill(0, 10, []);
foreach ($arr as &$element) {
    $num = rand(2, 20);
    $element = array_fill(0, $num, '');
}
reset($arr);
// print_r($arr);
foreach ($arr as &$element) {
    foreach ($element as &$value) {
        $value = chr(rand(65, 90));
    }
}
reset($arr);
// print_r($arr);
// echo '<br><br>';
foreach ($arr as &$element) {
    sort($element);
}
reset($arr);
_d($arr);
echo '<br><br>';
sort($arr);
_d($arr);
foreach ($arr as $key => &$element) {
    if (in_array('K', $element)) {
        $temp = $arr[$key];
        unset($arr[$key]);
        array_unshift($arr, $temp);
    }
}
reset($arr);
echo '<br><br>';
_d($arr);