<?php
$title = $post->post_title;
$content = $post->post_content;
$imageSrc = get_the_post_thumbnail_url($post, 'medium');
?>

<h1><?= $title ?></h1>

<div>
    <?= $content ?>
</div>

<img src="<?= $imageSrc ?>" />