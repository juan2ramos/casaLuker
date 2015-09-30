<?php
/*
Description: WP Functions - Theme init
Theme: Luker
*/

define('themeDir', get_template_directory() . '/');
define('themeDirUri', get_template_directory_uri() );


require(themeDir . 'functions/functions.php');
require(themeDir . 'functions/recipes.php');
require(themeDir . 'functions/ofertas_widget.php');







// Creamos dos taxonomías, género y autor para el custom post type "libro"
add_action('init', 'create_book_taxonomies', 0);
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
/* Here's how to create your customized labels */
add_action('init', 'my_custom_init');
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

add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
    add_meta_box('my-meta-box-id', 'My First Meta Box', 'cd_meta_box_cb', 'libro', 'normal', 'high');
}

add_action( 'save_post', 'cd_meta_box_save' );
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


