<?php

/**
 * Add social settings to the customizer
 */

function glasse_social_settings_page_cb()
{
    add_menu_page(
        'Social Settings',
        'Social Settings',
        'manage_options',
        'glasse-social-settings',
        'glasse_social_settings_page_content_cb',
        'dashicons-share-alt',
        20
    );
}

function glasse_social_settings_page_content_cb()
{
    // Aquí puedes incluir el contenido de tu página de configuración
?>
    <div class="wrap">
        <h2>Configuración del Sitio</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('grupo_configuracion');
            do_settings_sections('configuracion-sitio');
            submit_button();
            ?>
        </form>
    </div>
<?php
}
