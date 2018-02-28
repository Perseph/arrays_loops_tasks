<?php
$arr = [];
for($i = 0;$i < 10;$i++){
    $arr[] = rand(1, 100);
}

$res = 1;
$dl = count($arr) - 1;

for($i = 0;$i < $dl;$i += 2){
    if($arr[$i] > 0){
        $res *= $arr[$i];
    }
}
echo 'Результат парных ' . $res.'<br><br>';

echo 'Числа непарных индексов<br>';
foreach ($arr as $key => $val){
    if($val > 0 && $key % 2){
        echo $val.'<br>';
    }
}

?>