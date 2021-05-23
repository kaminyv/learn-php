<h2>Галерея</h2>
<div class="gallery">
    <?php echo $gallery1 ?>


    <?php foreach ($gallery as $image):?>
        <a href="/galleryone/?id=<?=$image['id']?>">
            <img src="<?=$image['folder']?>/<?=$image['name']?>" alt="<?=$image['name']?>">
        </a>
    <?php endforeach;?>
</div>
