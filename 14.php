<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$e = [1, 0, 0];
$res = 'net';
$i = 0;

foreach ($arr as $val){
   if ($val == $e[$i]){
       $res = 'est';
       $i++;
       break;
   }
}
echo  $res;
?>