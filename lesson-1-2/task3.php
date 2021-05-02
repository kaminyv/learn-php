<?php
/* Задание 3. Начало */

$x = randNumber();
$y = randNumber();

// Функция проверки на число

function checkNum($arg1, $arg2) {
    $arg1 = gettype($arg1);
    $arg2 = gettype($arg2);
    if (($arg1 === 'integer' || $arg1 === 'double') && ($arg2 === 'integer' || $arg2 === 'double') ) {
        return true;
    } else {
        return false;
    }
}

// Функция суммы
function add($arg1, $arg2) {
    return $res =(checkNum($arg1, $arg2))? $arg1 + $arg2 : 'Argument error';
}

// Функция разности
function sub($arg1, $arg2) {
    return $res =(checkNum($arg1, $arg2))? $arg1 - $arg2 : 'Argument error';
}

// Функция произведения
function mlt($arg1, $arg2) {
    return $res =(checkNum($arg1, $arg2))? $arg1 * $arg2 : 'Argument error';
}

// Функция деления
function div($arg1, $arg2) {

    if (checkNum($arg1, $arg2) && $arg2 <> 0) {
        $res = $arg1 / $arg2;
    } else {
        $res = 'Argument error';
    }

    return $res;
}
/* Задание 3. Конец */
?>
<section>
    <h3>Задание № 3</h3>
    <p>Работа Функции суммы <?=$x?> и <?=$y?> = <?=add($x, $y)?></p>
    <p>Работа Функции разности <?=$x?> и <?=$y?> = <?=sub($x, $y)?></p>
    <p>Работа Функции произведения <?=$x?> и <?=$y?> = <?=mlt($x, $y)?></p>
    <p>Работа Функции деления <?=$x?> и <?=$y?> = <?=div($x, $y)?></p>
</section>
