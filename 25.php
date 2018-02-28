<?php
$arr = [];
for($i = 0;$i < 20;$i++){
    $arr[] = rand(1, 100);
}

echo '<pre>';
print_r($arr);
echo '</pre>';

$max = array_search(max($arr),$arr);
$min = array_search(min($arr),$arr);

list($arr[$min], $arr[$max]) = [$arr[$max], $arr[$min]];

echo '<pre>';
print_r($arr);
echo '</pre>';

?>