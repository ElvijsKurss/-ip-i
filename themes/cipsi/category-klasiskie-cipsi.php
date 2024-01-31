<?php


get_header();
?>

<main> klasisko čipšu template
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

				$postLink = get_permalink($post);
			?>
				<li>
					<a href="<?= $postLink ?>"><?= $title ?></a>
					<img src="<?= $imageLargeSrc ?>" />
				</li>
			<?php
			}
			?>
		</div>
	</ul>

</main>

<?php

get_footer();
