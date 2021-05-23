<h2>Каталог товаров</h2>
<section class="catalog">
<?php foreach ($goods as $item):?>
    <article class="product">
        <img src="/images/<?=$item['image']?>">
        <a href="/catalogone/?id=<?=$item['id']?>"><b><?=$item['name']?></b></a>
        <div><input type="button" value="Купить"></div>
    </article>
<? endforeach;?>
</section>
