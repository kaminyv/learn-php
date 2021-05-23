<?php
/* Задание-4. Начало */
function transText($text) {
    $alfabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];
    $res = '';
    //Преобразуем строку в массив
    $text = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($text as $keyText=>$valueText) {
        $chrReg = ( mb_strtolower($valueText, 'utf-8') != $valueText ) ? true : false;
        $resChr = '';
        foreach ($alfabet as $keyAlfabet=>$valueAlfabet) {
            if ($chrReg) {
                $valueText = mb_strtolower($valueText, 'utf-8');
                if ($valueText == $keyAlfabet) {
                    $resChr .= ucfirst($valueAlfabet);
                }
            } else {
                if ($valueText == $keyAlfabet) {
                    $resChr .= $valueAlfabet;
                }
            }
        }
        $res .= ($resChr == '') ? $valueText : $resChr;
    }
    return $res;
}

$lineText = 'Щетина у мужчины - Большая.';
/* Задание-4. Конец */
?>
<h2>Задание 4</h2>
<p><?=$lineText?></p>
<p><?=transText($lineText)?></p>
