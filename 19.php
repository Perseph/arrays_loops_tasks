<?php
$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$day = 'Вторник';

foreach ($arr as $val){
    if($val == $day){
        echo '<i>'. $val .'</i> <br>';
        continue;
    }
    echo $val . '<br>';
}
?>