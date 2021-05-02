<?php
/* Задание 6. Начало */
$val = rand(1, 100);
$pow = rand(2, 100);
function power($val,$pow)
{
    if ($pow != 0)
    {
        return $val * power ($val, $pow - 1);
    }
    return 1;
}
/* Задание 6. Конец */
?>
<section>
    <h3>Задание № 6</h3>
    <p>Число <?=$val?> в степени <?=$pow?> = <?=power($val, $pow)?></p>
</section>
