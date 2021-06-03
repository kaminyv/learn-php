<h2>Заказы</h2>

<? foreach ($orders as $item): ?>
    <div id="item<?= $item['id'] ?>">
        <p>Номер заказа: <?= $item['id'] ?></p>
        <p>Имя: <?= $item['name'] ?></p>
        <p>Номер телефона: <?= $item['phone'] ?></p>

        <button class="delete" data-id="<?= $item['id'] ?>">Удалить</button>

        <hr>
    </div>
<? endforeach; ?>

<script>
    let buttonsDel = document.querySelectorAll('.delete');
    buttonsDel.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/deleteOrder/?id=' + id);
                //const answer = await response.json();
                document.getElementById('item'+id).remove();
            })();

        })
    })
</script>
