<?php

get_header();

?>

<h1><?= $post->post_title; ?></h1>
<div><?= $post->post_content; ?></div>

<?php
get_footer();
