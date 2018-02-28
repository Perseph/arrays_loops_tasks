<?php

$mass = [26,17,136,12,79,15];

$result = 0;

foreach ($mass as $val){
    $result += $val*$val;
}
echo $result;
?>
