<?php
/* Задание 4. Начало */
$x = randNumber();
$y = randNumber();
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return add($arg1, $arg2);
            break;
        case 'sub':
            return sub($arg1, $arg2);
            break;
        case 'mlt':
            return mlt($arg1, $arg2);
            break;
        case 'div':
            return div($arg1, $arg2);
            break;
        default:
            return 'Invalid operation type';
    }
}
/* Задание 4. Конец */
?>
<section>
    <h3>Задание № 4</h3>
    <p>Работа mathOperation для аргументов <?=$x?> и <?=$y?> и <?=$oper='mlt'?>  = <?=mathOperation($x, $y, $oper)?></p>
</section>
