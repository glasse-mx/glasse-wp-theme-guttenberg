<?php

function glasse_enqueue_cb()
{
    // theme dependencies

    // Bootstrap 5
    wp_enqueue_style('glasse-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', [], '5.0', 'all');

    wp_enqueue_script('glasse-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], '5.0', true);

    // Font Awesome
    wp_enqueue_style('glasse-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"', [], '5.15.4', 'all');

    // Google Fonts - Inter
    wp_enqueue_style('glasse-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', [], '1.0.0', 'all');

    // theme style basic
    wp_enqueue_style('glasse-style', GLASSE_THEME_URI . '/assets/css/theme.css', [], '1.0.0', 'all');
}
