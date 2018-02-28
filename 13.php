<table border="1" cellpadding="10">
    <tr>
<?php
for ($i=1;$i<=9;$i++) {
    echo "<td>";
    for ($z=1;$z<=9;$z++){
        echo $i*$z.'<br>';
    }
echo "</td>";
}
?>
    </tr>
</table>