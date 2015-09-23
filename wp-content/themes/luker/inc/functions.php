<?php

/* Add Space Search Widget */
add_action('widgets_init', 'widgetSearchFooter');
function widgetSearchFooter(){
    register_sidebar(
        array(
            'id' => 'widgetSearchFooter', /* El ID siempre debe ser único */
            'name' => 'widgetSearchFooter',
            'description' => 'widget',
            'before_widget' => '<div class "SearchFooter">',
            'after_widget' => '</div>',
            'before_title' => '<strong>',
            'after_title' => '</strong>',
        )
    );
}

/* Add Menu */
add_action('init', 'register_my_menus');
function register_my_menus()
{
    register_nav_menus(
        array(
            'menuHeader' => __('Menu Header'),
            'menuFooter' => __('Menu Footer')
        )
    );
}

/* Add Custom Search */
add_filter('get_search_form', 'searchCustom');
function searchCustom() {
    $form = '<form role="search" method="get"  class="h" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( '' ) . '</label>
    <input type="text" class="Search-input" value="' . get_search_query() . '" name="s" class="" id="s" placeholder="Buscar..." />
    <button class="Search-submit"><span class="icon-search"></span></button>
    </div>
    </form>';
    return $form;
}

//add image in posts
add_theme_support('post-thumbnails');

//size custom for image post
add_image_size('mySize', 200, 180);

//Register Widget Custom
add_action('widgets_init', 'registra_mis_widgets');
function registra_mis_widgets() {
    register_widget('ofertas_widget');
}
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );