<h2>Галерея</h2>
<div class="gallery">
<?php foreach ($gallery as $gallery):?>
    <a href="/public/images/<?=$gallery?>" target="_blank">
    <img src="/public/images/<?=$gallery?>" alt="<?=$gallery?>">
    </a>
<?php endforeach;?>
</div>
