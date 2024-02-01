<?php
add_theme_support('post-thumbnails');

// STYLES AND SCRIPTS
function enqueue_my_styles()
{
	wp_enqueue_style('my_theme_style', get_stylesheet_directory_uri() . '/style.css', array());
	wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
}

add_action('wp_enqueue_scripts', 'enqueue_my_styles');


// MENUS
function register_my_menu()
{
	register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');


// functions.php

function custom_menu_item_with_icon($title, $item, $args, $depth)
{
	// Check if the current menu item needs the icon
	$menu_item_needs_icon = true; // Change this condition based on your criteria

	// Add the icon HTML to the menu item title
	if ($menu_item_needs_icon && $depth === 0) {
		$title = $title . '<i class="fa fa-angle-down" aria-hidden="true"></i>';
	}

	return $title;
}

add_filter('nav_menu_item_title', 'custom_menu_item_with_icon', 10, 4);
