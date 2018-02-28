<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;

foreach ($arr as $value){
    if($count < 2){
        echo $value . ', ';
        $count++;
    }
    else {
        echo $value . '<br>';
        $count = 0;
    }
}
?>