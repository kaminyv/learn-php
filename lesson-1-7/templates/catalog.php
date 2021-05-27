<h2>Каталог</h2>

    <?php foreach ($catalog as $item):?>
        <div>
            <h2><?=$item['name']?></h2>
            <img src="/img/<?=$item['image']?>" width="150"><br>
            Цена: <?=$item['price']?><br>
            <p><?=$item['description']?></p>
            <button class="buy" data-id="<?=$item["id"]?>">Купить</button>
            <hr>
        </div>
    <? endforeach;?>


<script>
    let buttonsBuy = document.querySelectorAll('.buy');
    buttonsBuy.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/buy/?id=' + id);
                const answer = await response.json();
                document.getElementById('count').innerText = answer.count;

            })();

        })
    })

</script>
