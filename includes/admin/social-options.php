<?php

// Registrar las opciones de configuración
function registrar_opciones_configuracion()
{
    add_settings_section('seccion_telefonos', 'Números de Teléfono', 'mostrar_seccion_telefonos', 'configuracion-sitio');
    add_settings_field('campo_telefono_principal', 'Teléfono Principal', 'mostrar_campo_telefono_principal', 'configuracion-sitio', 'seccion_telefonos');
    add_settings_field('campo_telefono_secundario', 'Teléfono Secundario', 'mostrar_campo_telefono_secundario', 'configuracion-sitio', 'seccion_telefonos');

    register_setting('grupo_configuracion', 'opciones_configuracion');
}
add_action('admin_init', 'registrar_opciones_configuracion');

// Funciones de callback para mostrar campos
function mostrar_seccion_telefonos()
{
    echo '<p>Configura tus números de teléfono:</p>';
}

function mostrar_campo_telefono_principal()
{
    $opciones = get_option('opciones_configuracion');
    $telefono_principal = isset($opciones['telefono_principal']) ? esc_attr($opciones['telefono_principal']) : '';
    echo '<input type="tel" name="opciones_configuracion[telefono_principal]" value="' . $telefono_principal . '" />';
}

function mostrar_campo_telefono_secundario()
{
    $opciones = get_option('opciones_configuracion');
    $telefono_secundario = isset($opciones['telefono_secundario']) ? esc_attr($opciones['telefono_secundario']) : '';
    echo '<input type="tel" name="opciones_configuracion[telefono_secundario]" value="' . $telefono_secundario . '" />';
}
