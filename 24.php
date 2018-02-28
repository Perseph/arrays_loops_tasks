<?php
$num = 98312512;
$nub = 3;
$count = 0;

$numArr[] = str_split($num);
foreach ($numArr as $value){
    if($value === $nub){
        $count++;
    }
}
echo $count;
?>