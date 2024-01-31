<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav id="navigation-bar">
            <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
            <div class="wrapper">
                <div class="logo">
                    <a href="http://test-cipsi.test/">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo.png" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div id="main-content">
        <main id="page-<?= isset($post) ? $post->post_name : "unknown" ?>">