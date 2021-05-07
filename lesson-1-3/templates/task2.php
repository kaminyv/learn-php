<?php
/* Задание-2. Начало */
function numberEvOd($num) {
    $i = 0;
    $res = '';
    do {
        $decb = decbin($i);
        if ($i == 0) {
            $res .= $i . ' - ноль. <br>';
        } elseif($decb[strlen($decb)-1] == 1){
            $res .= $i . ' - нечетное число. <br>';
        } else {
            $res .= $i . ' - четное число. <br>';
        }
        $i++;
    } while ($i <= $num);
    return $res;
}
/* Задание-2. Конец */
?>

<h2>Задание 2</h2>
<p><?=numberEvOd(5)?></p>
