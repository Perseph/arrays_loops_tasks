<?php
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

foreach ($arr as $key => $val){
    $en[] = $key;
}

foreach ($arr as $key => $val){
    $ru[] = $val;
}
var_dump($en);
echo '<br>';
var_dump($ru);
?>