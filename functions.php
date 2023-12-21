<?php

/* SETUP */
// Define constants for theme directory and theme URI
define('GLASSE_THEME_DIR', get_template_directory());
define('GLASSE_THEME_URI', get_template_directory_uri());

/* INCLUDES */

// This sections includes all the files in the includes folder
$rootFiles = glob(GLASSE_THEME_DIR . '/includes/*.php');
$subdirectoryFiles = glob(GLASSE_THEME_DIR . '/includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach ($allFiles as $filename) {
    include_once($filename);
}

/* HOOKS */
add_action('init', 'glasse_register_menus');
add_action('wp_enqueue_scripts', 'glasse_enqueue_cb');
add_action('after_setup_theme', 'glasse_theme_support_cb');
