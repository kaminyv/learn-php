<?php
/* Задание-5. Начало */
function replSpaces($text) {
    $res = '';
    //Преобразуем строку в массив
    $text = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($text as $keyText=>$valueText) {
        $res .= ($valueText == ' ') ? '_' : $valueText;
    }
    return $res;
}

$lineText = 'Щетина у мужчины - Большая';
/* Задание-5. Конец */
?>
<h2>Задание 5</h2>
<p><?=$lineText?></p>
<p><?=replSpaces($lineText)?></p>
