<?php

function hamza_load_stylesheets()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');

    wp_enqueue_style('style');

}


add_action('wp_enqueue_scripts', 'hamza_load_stylesheets');

add_theme_support('menus');

//register menu
register_nav_menu('primary', 'Primary Header navigation');