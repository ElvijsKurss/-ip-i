<?php
$title = $post->post_title;
$content = $post->post_content;
$imageSrc = get_the_post_thumbnail_url($post, 'large');
?>
<div class="product-holder content-wrapper">
    <div class="product-image-holder"><img src="<?= $imageSrc ?>" /></div>


    <div class="product-text-holder">
        <h1 class="helper-two"><?= $title ?></h1>
        <?= $content ?>
        <div class="pirkt-span-container">
            <span class="pirkt-span">Pirkt</span>

        </div>
    </div>
</div>