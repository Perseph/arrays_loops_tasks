<?php
$check = 123455;
$res = 0;

if (is_numeric($check)){
    $res = array_sum(str_split($check));
}
echo $res;

?>