<?php
/* Задание-8. Начало */
$district = [
    'Московская область'=> ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Самарская область' => ['Самара', 'Новокуйбышевск', 'Отрадный'],
];

function kladr($district) {
    foreach ($district as $key => $value) {
        echo $key . ": <br>";
        $res = '';
        for ($i = 0; $i <= count($value); $i++) {
            $text = preg_split('//u', $value[$i], -1, PREG_SPLIT_NO_EMPTY);
            if ($text[0] == 'К') {
                $res .= $value[$i] . ',';
            }
        }
        if ($res <> '') $res = substr_replace($res,'.',-1);
        echo $res . '<br>';
    }
}
/* Задание-8. Конец */
?>

<h2>Задание 8</h2>
<p><?=kladr($district)?></p>
