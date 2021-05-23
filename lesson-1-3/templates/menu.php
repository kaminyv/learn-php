<ul class="menu">
    <? foreach ($menu as $key=>$value): ?>
        <li><a href="<?=$value['link']?>"><?=$value['name']?></a>
        <? if ($value['sub']):?>
            <ul>
                <? foreach ($value['sub'] as $keySub=>$valueSub): ?>
                    <li><a href="<?=$valueSub['link']?>"><?=$valueSub['name']?></a></li>
                <? endforeach; ?>
            </ul>
        <? endif ?>
        </li>
    <? endforeach; ?>
</ul>



