<?php
$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];

foreach ($arr as $key => $val){
    if ($key == 5 or $key == 6){
        echo '<b>'.$val.'</b><br>';
    }   else echo $val.'<br>';
}
?>