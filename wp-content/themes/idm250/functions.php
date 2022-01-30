<?php

//Check Server PHP Version


//echo '<pre>';
//var_dump(phpversion());
//echo'</pre>';

if (version_compare('7.4', phpversion(), '>' )) {
    die('You must be using PHP 7.4 or greater.');
}


//Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
}

function include_styles ()

{
    //Example of including an external link

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    //Example of including a style local to your theme root

    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/dist/styles/main.css'
    );
}

//When WP performs this action, call our function

add_action('wp_enqueue_scripts', 'include_styles');

//@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/

function include_js_files() {
    wp_enqueue_script(
        'idm250-js',
         get_template_directory_uri() . '/dist/scripts/app.js',
         [],
         false,
         true
    );
}

function register_theme_navigation()

{
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');
