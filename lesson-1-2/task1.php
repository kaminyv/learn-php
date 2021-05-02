<?php
/* Задание 1. Начало */
function randNumber() {
return rand(-100, 100);
}

$a = randNumber();
$b = randNumber();

if ($a >= 0 && $b >= 0) {
$res = 'Разность чисел ' . $a . ' и ' . $b . ' = ' . ($a - $b);
} elseif ($a < 0 && $b < 0) {
$res = 'Произведение чисел ' . $a . ' и ' . $b . ' = ' . ($a * $b);
} else {
$res = 'Сумма чисел ' . $a . ' и ' . $b . ' = ' . ($a * $b);
}
/* Задание 1. Конец */
?>
<section>
    <h3>Задание № 1</h3>
    <p><?=$res?></p>
</section>
