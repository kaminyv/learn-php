<?php
/* Задание 2. Начало */
//Через switch
$r = rand(0, 15);
$rr = $r;
$sequence = '';
switch ($r) {
    case 0:
        $sequence .= $r++ . ' ';
    case 1:
        $sequence .= $r++ . ' ';
    case 2:
        $sequence .= $r++ . ' ';
    case 3:
        $sequence .= $r++ . ' ';
    case 4:
        $sequence .= $r++ . ' ';
    case 5:
        $sequence .= $r++ . ' ';
    case 6:
        $sequence .= $r++ . ' ';
    case 7:
        $sequence .= $r++ . ' ';
    case 8:
        $sequence .= $r++ . ' ';
    case 9:
        $sequence .= $r++ . ' ';
    case 10:
        $sequence .= $r++ . ' ';
    case 11:
        $sequence .= $r++ . ' ';
    case 12:
        $sequence .= $r++ . ' ';
    case 13:
        $sequence .= $r++ . ' ';
    case 14:
        $sequence .= $r++ . ' ';
    case 15:
        $sequence .= $r . ' ';
        break;
}

// Через рекурсию

function interNum($rr) {
    if ($rr <= 15) {
        echo $rr . ' ';
        interNum($rr+1);
    }
}
/* Задание 2. Конец */
?>
<section>
    <h3>Задание № 2</h3>
    <p>Через switch - Числа от <?=$rr?> до 15 = <?=$sequence?></p>
    <p>Через рекурсию - Числа от <?=$rr?> до 15 = <?=interNum($rr)?></p>
</section>
