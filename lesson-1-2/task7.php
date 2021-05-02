<?php
/* Задание 7. Начало */
function timesTo() {
    $hors = date('H');
    $minuts = date('i');

    $res = $hors;

    if ($hors == 1 || $hors == 21) {
        $res .= ' час ';
    } elseif (($hors >= 2 && $hors <= 4) || ($hors >= 22 && $hors <= 24)) {
        $res .= ' часа ';
    } else {
        $res .= ' часов ';
    }

    $res .= $minuts;

    $minuts = abs($minuts) % 100;
    $n1 = fmod($minuts, 10);
    if ($minuts > 10 && $minuts < 20) {
        $res .= ' минут ';
    } elseif ($n1 > 1 && $n1 < 5) {
        $res .= ' минуты ';
    } elseif ($n1 == 1) {
        $res .= ' минута ';
    } else {
        $res .= ' минут ';
    }

    return $res;

}
/* Задание 7. Конец */
?>
<section>
    <h3>Задание № 7</h3>
    <p>Текущее время: <?=timesTo()?></p>
</section>
