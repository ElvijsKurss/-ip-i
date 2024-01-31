<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav id="navigation-bar">
            <div id="top-logo">LOGO</div>

            <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
        </nav>
    </header>
    <div id="main-content">
        <main id="page-<?= isset($post) ? $post->post_name : "unknown" ?>">