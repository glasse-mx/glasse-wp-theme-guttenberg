<?php

/**
 * Register Menu
 * 
 * Esta Funcion le permite al tema registrar 3 tipos de menus:
 * Navbar Menu, Secondary Menu y Footer Menu
 * 
 */

function glasse_register_menus()
{
    register_nav_menus(array(
        'nav_menu' => __('Navbar Menu', 'glasse'),
        'secondary' => __('Secondary Menu', 'glasse'),
        'footer' => __('Footer Menu', 'glasse')
    ));
}
