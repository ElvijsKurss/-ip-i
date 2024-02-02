<?php
get_header();
?>
<div id="page-produkti-content" class="content-wrapper">
    <h1 class="helper-one">Produkti</h1>

    <div id="products-container">
        <?php
        $args = array(
            'taxonomy' => 'category',
            'orderby' => 'name',
            'order'   => 'ASC',
        );

        $cats = get_categories($args);

        foreach ($cats as $cat) {
            $imageId = get_field('image', $cat);
            $imageAttributes = wp_get_attachment_image_src($imageId, 'medium');
        ?>
            <div class="post-item">
                <a href="<?php echo get_category_link($cat->term_id) ?>" class="category-link">
                    <?php if ($imageAttributes) { ?>
                        <img src="<?= $imageAttributes[0] ?>" class="category-image" />
                    <?php } ?>
                    <div class="product-text-container">
                        <h2 class="category-title"><?php echo $cat->name; ?></h2>
                        <span class="choose-span">Izvēlies</span>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
get_footer();
?>