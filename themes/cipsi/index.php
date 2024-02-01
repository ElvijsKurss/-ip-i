<?php

get_header();
?>
	<?php
	// Check if we are in the 'home' section on the front page
	if (is_home() && is_front_page()) {
		// Include template-parts/content-home.php
		get_template_part('template-parts/content', 'home');
	} else {
		// Check if we have posts
		if (have_posts()) {
			// Loop through posts
			while (have_posts()) {
				// Fetch next post
				the_post();

				// Include template based on post type in template-parts/content-POSTTYPE.php
				get_template_part('template-parts/content', get_post_type());
			}
		} else {
			// Include content for a page without posts (probably something like 'not found')
			get_template_part('template-parts/content', 'none');
		}
	}
	?>
<?php
get_footer();
