<?php

//add image in posts
add_theme_support('post-thumbnails');

//size custom for image post
add_image_size('mySize', 200, 180);

/* Add Menu */
 function register_my_menus(){
     register_nav_menus(
         array(
             'menuHeader' => __('Menu Header'),
             'menuFooter' => __('Menu Footer')
         )
     );
 }

add_action('init', 'register_my_menus');

/* Add sidebar */
/* Se puede colocar eb cuaquier lugar, no necesariamente en un sidebar */

function plugin_register_juan(){
    register_sidebar(
        array(
            'id' => 'sidebar-footer', /* El ID siempre debe ser único */
            'name' => 'Mi nuevo sidebar',
            'description' => 'esto es un test de mi widget',
            'before_widget' => '<div class "sidebar-item">',
            'after_widget' => '</div>',
            'before_title' => '<strong>',
            'after_title' => '</strong>',
        )
    );
}
add_action('widgets_init', 'plugin_register_juan');



add_filter( 'jetpack_development_mode', '__return_true' );




// Tamaños de imágenes Con recorte
//add_image_size('custom-thumb-1024-500', 2048, 1000, true);
//add_image_size('custom-thumb-350-200', 700, 400, true);
//add_image_size('custom-thumb-70-70', 140, 140, true);
//
//// Tamaños de imágenes Sin recorte
//add_image_size('custom-thumb-1024-x', 2048, false);
//add_image_size('custom-thumb-800-x', 1600, false);
//add_image_size('custom-thumb-300-x', 600, false);

// Habilitar la compresión de imágenes al 50% de su calidad
add_filter('jpeg_quality', create_function('','return 50;'));

/*
Description: WP Functions - Theme init
Theme: Incanto
*/
/* *************** */
/*   THEME INIT    */
/* *************** */
// Constants 
define('UN_THEME_URI', get_template_directory_uri() . '/');
define('UN_THEME_DIR', get_template_directory() . '/');
define('UN', 'uncommons');
// Setup
// require(UN_THEME_DIR . 'inc/setup.php');
// Assets
// require(UN_THEME_DIR . 'inc/assets.php');
// Menus 
// require(UN_THEME_DIR . 'inc/menus.php');
// Theme Functions
// require(UN_THEME_DIR . 'inc/aq_resizer.php');
// require(UN_THEME_DIR . 'inc/functions.php');
// Plugins
// require(UN_THEME_DIR . 'inc/plugins.php');
// Widgets
// require(UN_THEME_DIR . 'inc/widgets/default-widgets.php');
// require(UN_THEME_DIR . 'inc/widgets/mega-posts.php');
// require(UN_THEME_DIR . 'inc/widgets/mega-projects.php');
// Redux Framework
if (!class_exists('ReduxFramework') && file_exists(UN_THEME_DIR . 'redux/framework.php')) {
    require_once(UN_THEME_DIR . 'redux/framework.php');
}
// Redux Extensions
if (file_exists(UN_THEME_DIR . 'inc/redux_ext.php')) {
    require_once(UN_THEME_DIR . 'inc/redux_ext.php');
}
// Redux Options
if (class_exists('ReduxFramework') && file_exists(UN_THEME_DIR . 'inc/options.php')) {
    require_once(UN_THEME_DIR . 'inc/options.php');
}
// Redux Metaboxes
if (class_exists('ReduxFramework') && file_exists(UN_THEME_DIR . 'inc/metaboxes.php')) {
    require_once(UN_THEME_DIR . 'inc/metaboxes.php');
}
// Visual Composer init
if (defined('WPB_VC_VERSION')) {
    require_once(UN_THEME_DIR . 'inc/vc-blocks/setup.php');
}
// WooCommerce Init
if (class_exists('WooCommerce')) {
    require_once(UN_THEME_DIR . 'inc/woocommerce.php');
}
// unCommons News Init
if (file_exists(UN_THEME_DIR . 'inc/un_news.php')) {
    require_once(UN_THEME_DIR . 'inc/un_news.php');
}