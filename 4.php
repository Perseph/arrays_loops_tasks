<?php
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr <?php foreach ($arr as $key => $mass) : ?>>
        <td><?=$mass?></td>
        <td><?=$key?></td>
    </tr <?php endforeach ?>>
</table>

</body>
</html>
