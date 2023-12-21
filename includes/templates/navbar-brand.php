<?php

/**
 * Navbar Brand
 * 
 * Esta función se encarga de mostrar el logo del sitio web en caso de que exista
 * o el nombre del sitio web en caso de que no exista un logo personalizado.
 * 
 */

function glasse_navbar_brand_cb()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

    ob_start();
?>
    <a class="navbar-brand" href="#">
        <?php if (has_custom_logo()) : ?>
            <img src="<?= esc_url($logo[0]) ?>" alt="<?= get_bloginfo('name') ?>">
        <?php else : ?>
            <span style="text-transform: uppercase"><?= get_bloginfo('name') ?></span>
        <?php endif; ?>
    </a>
<?php
    $navbarBrand = ob_get_contents();
    ob_end_clean();

    return $navbarBrand;
}
