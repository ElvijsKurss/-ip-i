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
                <div id="header-container">
                    <div id="logo-container">
                        <div class="logo">
                            <a href="#">
                                <img src="<?= get_stylesheet_directory_uri() ?>assets/logo.svg" alt="Cipsi logo" />
                            </a>
                        </div>
                        <div>
                            <p id="logo-teksts">Garšīga kompānija</p>
                        </div>
                    </div>
                    <div id="list-container">
                        <ul id="list">
                            <li class="list-element"><a href="Jaunumi">Jaunumi</a></li>
                            <li class="list-element"><a href="#">Produkti<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <li class="list-element"><a href="#">Ilgtspēja</a></li>
                            <li class="list-element"><a href="#">Uzturklase</a></li>
                            <li class="list-element"><a href="#">Par mums<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="main-content">