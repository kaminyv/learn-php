<?php
    include "math.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 1: Калькулятор GET</title>
</head>
<body>
<form name="form-get">
    <nav>
        <a href="/">Главная</a>
        <a href="/calc2.php">Задание 2: Калькулятор-AJAX</a>
    </nav>
    <h3>Задание 1: Калькулятор GET</h3>
    <input name="operand1" type="text" value="<?=$operand1?>">
    <select name="opermeth">
        <option <?php if ($opermeth == 'add'): echo "selected"; endif ?> value="add">+</option>
        <option <?php if ($opermeth == 'sub'): echo "selected"; endif ?> value="sub">-</option>
        <option <?php if ($opermeth == 'mlt'): echo "selected"; endif ?> value="mlt">*</option>
        <option <?php if ($opermeth == 'div'): echo "selected"; endif ?> value="div">/</option>
    </select>
    <input name="operand2" type="text" value="<?=$operand2?>">
    <input type="submit" value="=">
    <input name="res" type="text" value="<?=$response['result']?>" readonly>
</form>

</body>
</html>
