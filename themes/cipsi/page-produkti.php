<?php

get_header();
?>
<h1 class="helper-one">Produkti</h1>

<div id="test-id">
    <?php
    $args = array(
        'taxonomy' => 'category', // Replace with correct 
        'orderby' => 'name',
        'order'   => 'ASC',
        //'hide_empty' => false
    );

    $cats = get_categories($args);

    foreach ($cats as $cat) {
        $imageId = get_field('image', $cat);
        $imageAttributes = wp_get_attachment_image_src($imageId, 'medium');
    ?>
        <a href="<?php echo get_category_link($cat->term_id) ?>">
            <h2><?php echo $cat->name; ?></h2>

            <?php if ($imageAttributes) { ?>
                <img src="<?= $imageAttributes[0] ?>" />
            <?php } ?>

        </a>
    <?php
    }
    ?>
</div>
<?php
get_footer();
