<?php

//Check Server PHP Version


//echo '<pre>';
//var_dump(phpversion());
//echo'</pre>';

if (version_compare('8.0', phpversion(), '>' )) {
    die('You must be using PHP 8.0 or greater.');
}


//Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
}

function include_styles ()

{
    // Example of including an external link
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    // Example of including a style local to your theme root
    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/dist/styles/main.css',
        [],
        time() // Force Cache. Do not keep when on production
    );
}

//When WP performs this action, call our function

add_action('wp_enqueue_scripts', 'include_styles');

//@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/

function include_js_files() {
    wp_enqueue_script(
        'idm250-js',
         get_template_directory_uri() . '/dist/scripts/app.js',
         [], //$deps
         false, // $version
         true //$in_footer
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

/*
 * Render custom menu
 *
 * @param string $menu_name
 * @return array
 */
function idm_render_menu($menu_name)
{
    if (!$menu_name) {
        return;
    }
    // return an array of menu locations that are registered
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}


//featured image tabs where you can drag/upload images 

function add_post_thumbnails_support()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

function idm_register_sidebars()
{
    register_sidebar([
        'name' => __('Primary Sidebar', 'theme_name'),
        'id' => 'sidebar-primary',
    ]);
    register_sidebar([
        'name' => __('Secondary Sidebar', 'theme_name'),
        'id' => 'secondary-primary',
    ]);
}

add_action('widgets_init', 'idm_register_sidebars');

/**
 * Register Custom Post types
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */
function idm_register_custom_post_type()
{
    $args = [
        'label' => 'Project',
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project'
        ],
        'supports' => [
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats'
        ],
        // 'taxonomies'            => ['category', 'post_tag'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'projects'],

        // Dash Icons https://developer.wordpress.org/resource/dashicons/#media-audio
        'menu_icon' => 'dashicons-clipboard'
        // 'menu_icon'             => get_stylesheet_directory_uri() . '/static/images/icons/industries.png'
    ];

    register_post_type('idm-projects', $args);
}
add_action('init', 'idm_register_custom_post_type');

/**
 * register taxonomies
 *
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @return void
 */
function idm_register_taxonomies()
{
    $labels = [
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Categories'),
    ];

    register_taxonomy(
        'idm-project-categories',
        ['idm-projects'],
        [
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'works'],
        ]
    );
}

add_action('init', 'idm_register_taxonomies', 0);

//get attachment meta
/**
 * Get asset meta data and return it in an array
 *
 * @param number $attachment_id - Asset ID. You can get this by calling get_post_thumbnail_id()
 * @return void
 */
function idm_get_asset_by_id($attachment_id)
{
    // If no image, return false
    if (!wp_get_attachment_image_url($attachment_id, '')) {
        return false;
    }
    $attachment = get_post($attachment_id);

    return [
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => wp_get_attachment_image_url($attachment_id, ''),
        'title' => $attachment->post_title
    ];
}