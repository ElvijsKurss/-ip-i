<?php


get_header();
?>

<main>
	<ul>
		<?php

		$args = array(
			'post_type'        => 'produkts',
			'category_name'    => 'klasiskie-cipsi',
		);

		$query = new WP_Query($args);

		$posts = $query->get_posts();
		?>
		<div id="photoGrid">
			<?php
			foreach ($posts as $post) {
				$title = $post->post_title;
				$content = $post->post_content;
				$imageThumbnailSrc = get_the_post_thumbnail_url($post, 'Small boy size');
				$imageLargeSrc = get_the_post_thumbnail_url($post, 'medium');
				$categories = get_the_category($post);
				$categoryNames = array();

				if ($categories) {
					foreach ($categories as $category) {
						$categoryNames[] = $category->name;
					}

					$categoryList = implode(', ', $categoryNames);
				} else {
					$categoryList = 'No category';
				}

				$postLink = get_permalink($post);
			?>
				<li class="post-item">
					<a href="<?= $postLink ?>" class="post-title"><?= $title ?></a>
					<span class="post-categories"><?= $categoryList ?></span>
					<img src="<?= $imageLargeSrc ?>" alt="<?= $title ?>" class="post-image" />
				</li>
			<?php
			}
			?>
		</div>


	</ul>

</main>

<?php

get_footer();
