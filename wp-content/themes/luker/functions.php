<?php

//add image in posts
add_theme_support('post-thumbnails');

//size custom for image post
add_image_size('mySize', 200, 180);

/* Add Menu */
function register_my_menus()
{
    register_nav_menus(
        array(
            'menuHeader' => __('Menu Header'),
            'menuFooter' => __('Menu Footer')
        )
    );
}


add_filter('get_search_form', 'searchCustom');

function searchCustom($text) {
    $form = '<form role="search" method="get"  class="h" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( '' ) . '</label>
    <input type="text" class="Search-input" value="' . get_search_query() . '" name="s" class="" id="s" placeholder="Buscar..." />
    <button class="Search-submit"><span class="icon-search"></span></button>
    </div>
    </form>';




    return $form;
}


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
add_action('widgets_init', 'widgetSearchFooter');
/* Add sidebar */
/* Se puede colocar eb cuaquier lugar, no necesariamente en un sidebar */


//add_filter( 'jetpack_development_mode', '__return_true' );


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
add_filter('jpeg_quality', create_function('', 'return 50;'));

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


add_action('init', 'register_my_menus');


add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('acme_product',
        array(
            'labels' => array(
                'name' => _x('prodcut', 'post type general name'),
                'singular_name' => _x('Libro', 'post type singular name'),
                'add_new' => _x('Añadir nuevo', 'book'),
                'add_new_item' => __('Añadir nuevo Libro'),
                'edit_item' => __('Editar Libro'),
                'new_item' => __('Nuevo Libro'),
                'view_item' => __('Ver Libro'),
                'search_items' => __('Buscar Libros'),
                'not_found' => __('No se han encontrado Libros'),
                'not_found_in_trash' => __('No se han encontrado Libros en la papelera'),
                'parent_item_colon' => ''
            ),
            'public' => true,
            'has_archive' => true,
        )
    );

}

add_action('init', 'create_book_taxonomies', 0);

// Creamos dos taxonomías, género y autor para el custom post type "libro"
function create_book_taxonomies()
{
    // Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
    $labels = array(
        'name' => _x('Géneros', 'taxonomy general name'),
        'singular_name' => _x('Género', 'taxonomy singular name'),
        'search_items' => __('Buscar por Género'),
        'all_items' => __('Todos los Géneros'),
        'parent_item' => __('Género padre'),
        'parent_item_colon' => __('Género padre:'),
        'edit_item' => __('Editar Género'),
        'update_item' => __('Actualizar Género'),
        'add_new_item' => __('Añadir nuevo Género'),
        'new_item_name' => __('Nombre del nuevo Género'),
    );
    register_taxonomy('genero', array('libro'), array(
        'hierarchical' => true,
        'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'genero')
    ));
    $labels = array(
        'name' => _x('Escritores', 'taxonomy general name'),
        'singular_name' => _x('Escritor', 'taxonomy singular name'),
        'search_items' => __('Buscar Escritores'),
        'popular_items' => __('Escritores populares'),
        'all_items' => __('Todos los escritores'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar Escritor'),
        'update_item' => __('Actualizar Escritor'),
        'add_new_item' => __('Añadir nuevo Escritor'),
        'new_item_name' => __('Nombre del nuevo Escritor'),
        'separate_items_with_commas' => __('Separar Escritores por comas'),
        'add_or_remove_items' => __('Añadir o eliminar Escritores'),
        'choose_from_most_used' => __('Escoger entre los Escritores más utilizados')
    );

    register_taxonomy('escritor', 'libro', array(
        'hierarchical' => false,
        'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'escritor'),
    ));
} // Fin de la función create_book_taxonomies().

// La función no será utilizada antes del 'init'.
add_action('init', 'my_custom_init');
/* Here's how to create your customized labels */
function my_custom_init()
{
    $labels = array(
        'name' => _x('Productos', 'post type general name'),
        'singular_name' => _x('Libro', 'post type singular name'),
        'add_new' => _x('Añadir nuevo', 'book'),
        'add_new_item' => __('Añadir nuevo Libro'),
        'edit_item' => __('Editar Libro'),
        'new_item' => __('Nuevo Libro'),
        'view_item' => __('Ver Libro'),
        'search_items' => __('Buscar Libros'),
        'not_found' => __('No se han encontrado Libros'),
        'not_found_in_trash' => __('No se han encontrado Libros en la papelera'),
        'parent_item_colon' => ''
    );

    // Creamos un array para $args
    $args = array('labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('libro', $args); /* Registramos y a funcionar */
}
add_filter( 'manage_edit-libro_columns', 'my_columns' );
function my_columns( $columns ) {
    $columns['movie_reviews_director'] = 'Director';
    $columns['movie_reviews_rating'] = 'Rating';
    $columns['movie_reviews_otro'] = 'Otro';
    unset( $columns['comments'] );
    return $columns;
}

add_action( 'manage_posts_custom_column', 'populate_columns' );
function populate_columns( $column ) {
    if ( 'movie_reviews_director' == $column ) {
        $movie_director = esc_html( get_post_meta( get_the_ID(), 'movie_director', true ) );
        echo $movie_director;
    }
    elseif ( 'movie_reviews_rating' == $column ) {
        $movie_rating = get_post_meta( get_the_ID(), 'movie_rating', true );
        echo $movie_rating . ' stars';
    }
}
add_filter( 'manage_edit-libro_sortable_columns', 'sort_me' );
function sort_me( $columns ) {
    $columns['movie_reviews_director'] = 'movie_reviews_director';
    $columns['movie_reviews_rating'] = 'movie_reviews_rating';

    return $columns;
}


function wpt_libro_location() {
    global $post;

    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
        wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

    // Get the location data if its already been entered
    $location = get_post_meta($post->ID, '_location', true);

    // Echo out the field
    echo '<input type="text" name="movie_reviews_rating" value="' . $location  . '" class="widefat" />';

}

add_action( 'init', 'register_cpt_event' );

function register_cpt_event() {

    $labels = array(
        'name' => _x( 'Events', 'event' ),
        'singular_name' => _x( 'Event', 'event' ),
        'add_new' => _x( 'Add New', 'event' ),
        'add_new_item' => _x( 'Add New Event', 'event' ),
        'edit_item' => _x( 'Edit Event', 'event' ),
        'new_item' => _x( 'New Event', 'event' ),
        'view_item' => _x( 'View Event', 'event' ),
        'search_items' => _x( 'Search Events', 'event' ),
        'not_found' => _x( 'No events found', 'event' ),
        'not_found_in_trash' => _x( 'No events found in Trash', 'event' ),
        'parent_item_colon' => _x( 'Parent Event:', 'event' ),
        'menu_name' => _x( 'Eventos', 'event' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Events for chapter members to attend',
        'supports' => array( 'title', 'editor', 'custom-fields' ),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        # 'rewrite' => true,
        'rewrite' => array('slug' => 'events', 'with_front' => false),
        'capability_type' => 'post',

        'register_meta_box_cb' => 'add_events_metaboxes'
    );

    register_post_type( 'event', $args );
}


function add_events_metaboxes() {
    add_meta_box('aorn_events_meeting_id', 'Meeting info', 'aorn_events_meeting', 'event', 'side', 'high');
}


function aorn_events_meeting($object, $box) {

    wp_nonce_field(basename( __FILE__ ), 'aorn_events_meeting_nonce');

    $topic = esc_attr(get_post_meta($object->ID, 'aorn_events_meeting_topic', true));
    $speaker = esc_attr(get_post_meta($object->ID, 'aorn_events_meeting_speaker', true));

    echo '<p><label for="aorn_events_meeting_topic">' . _e('Topic') . '</label></p>';
    echo '<p><input type="text" class="widefat" name="aorn_events_meeting_topic" id="aorn_events_meeting_topic" value="' . $topic . '"></p>';

    echo '<p><label for="aorn_events_meeting_speaker">' . _e('Speaker') . '</label></p>';
    echo '<p><input type="text" class="widefat" name="aorn_events_meeting_speaker" id="aorn_events_meeting_speaker" value="' . $speaker . '"></p>';

}


function aorn_events_meeting_save($post_id) {

    // Negative checks
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!isset($_POST['aorn_events_meeting_nonce']) || !wp_verify_nonce($_POST['aorn_events_meeting_nonce'], basename(__FILE__))) {
        return;
    }
    if (!current_user_can('edit_post')) {
        return;
    }

    $events_meta['aorn_events_meeting_topic'] = $_POST['aorn_events_meeting_topic'];
    $events_meta['aorn_events_meeting_speaker'] = $_POST['aorn_events_meeting_speaker'];

    $post = get_post($post_id);

    foreach ($events_meta as $key => $value) {
        if ($post->post_type == 'revision') {
            return;
        }
        if (get_post_meta($post_id, $key, FALSE)) {
            update_post_meta($post_id, $key, $value);
        } else {
            add_post_meta($post_id, $key, $value);
        }
        if (!$value) {
            delete_post_meta($post_id, $key);
        }
    }

}


add_action('save_post', 'aorn_events_meeting_save', 10, 1);



add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
    add_meta_box('my-meta-box-id', 'My First Meta Box', 'cd_meta_box_cb', 'libro', 'normal', 'high');
}
function cd_meta_box_cb( $post )
{
    $values = get_post_custom( $post->ID );
    $text = isset( $values['my_meta_box_text'] ) ? esc_attr( $values['my_meta_box_text'][0] ) : '';
$selected = isset( $values['my_meta_box_select'] ) ? esc_attr( $values['my_meta_box_select'][0] ) : '';
$check = isset( $values['my_meta_box_check'] ) ? esc_attr( $values['my_meta_box_check'][0] ) : '';
    ?>
    <p>
        <label for="my_meta_box_text">Text Label</label>
        <input type="text" name="my_meta_box_text" id="my_meta_box_text" value="<?php echo $text; ?>" />
    </p>

    <p>
        <label for="my_meta_box_select">Color</label>
        <select name="my_meta_box_select" id="my_meta_box_select">
            <option value="red" <?php selected( $selected, 'red' ); ?>>Red</option>
            <option value="blue" <?php selected( $selected, 'blue' ); ?>>Blue</option>
        </select>
    </p>
    <p>
        <input type="checkbox" id="my_meta_box_check" name="my_meta_box_check" <?php checked( $check, 'on' ); ?> />
        <label for="my_meta_box_check">Do not check this</label>
    </p>
    <?php
}

add_action( 'save_post', 'cd_meta_box_save' );

function cd_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    //if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    // now we can actually save the data
    $allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );

    // Make sure your data is set before trying to save it
    if( isset( $_POST['my_meta_box_text'] ) )
        update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text'], $allowed ) );

    if( isset( $_POST['my_meta_box_select'] ) )
        update_post_meta( $post_id, 'my_meta_box_select', esc_attr( $_POST['my_meta_box_select'] ) );

    // This is purely my personal preference for saving check-boxes
    $chk = isset( $_POST['my_meta_box_check'] ) && $_POST['my_meta_box_select'] ? 'on' : 'off';
    update_post_meta( $post_id, 'my_meta_box_check', $chk );
}

require_once(get_template_directory().'/inc/ofertas_widget.php');
add_action('widgets_init', 'registra_mis_widgets');
function registra_mis_widgets() {
    register_widget('ofertas_widget');
}