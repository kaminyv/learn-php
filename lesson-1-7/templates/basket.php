<h2>Корзина</h2>

<? foreach ($basket as $item): ?>
    <div id="item<?= $item['basket_id'] ?>">
        <h3><?= $item['name'] ?></h3>
        <img src="/img/<?= $item['image'] ?>" width="100px" alt=""><br>
        Цена: <?= $item['price'] ?><br><br>

        <button class="delete" data-id="<?= $item['basket_id'] ?>">Удалить</button>

        <hr>
    </div>
<? endforeach; ?>

<script>
    let buttonsDel = document.querySelectorAll('.delete');
    buttonsDel.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/delete/?id=' + id);
                const answer = await response.json();
                document.getElementById('item'+id).remove();
                document.getElementById('count').innerText = answer.count;

            })();

        })
    })
</script>
