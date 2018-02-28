<?php
$row = 7;
$column = 7;
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

echo '<table>';
for($i = 0;$i < $row;$i++){
    echo '<td>';
    for ($j = 0;$j < $column;$j++){
        $color = $colors[array_rand($colors)];
        $num = rand();
        echo "<td style='background-color:{$color}'>{$num}</td>";
    }
    echo '</tr>';
}
echo '</table>';

?>