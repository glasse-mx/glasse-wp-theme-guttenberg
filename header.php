<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="fixed-top">
        <div class="topbar">
            <div class="container">
                <div class="row py-2">
                    <?= topbar_social_block() ?>
                    <?= glasse_phone_block() ?>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <?= glasse_navbar_brand_cb() ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" style="flex-grow: inherit !important" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'nav_menu',
                        'container' => 'ul',
                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker(),
                    ]);
                    ?>
                </div>
            </div>
        </nav>
    </header>