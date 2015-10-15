<?php


/* Add Recipes */
add_action('init', 'registerRecipes');
function registerRecipes()
{
    $labels = array(
        'name' => _x('Recetas'),
        'singular_name' => _x('Receta'),
        'add_new' => _x('Añadir receta', 'receta'),
        'add_new_item' => __('Añadir nueva receta'),
        'edit_item' => __('Editar receta'),
        'new_item' => __('Nueva receta'),
        'view_item' => __('Ver receta'),
        'search_items' => __('Buscar recetas'),
        'not_found' => __('No se han encontrado recetas'),
        'not_found_in_trash' => __('No se han encontrado recetas en la papelera'),
        'parent_item_colon' => '',
        'menu_icon' => '',

    );

    //  $args
    $args = array('labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'revisions', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
    );

    register_post_type('recipe', $args);
}


/* Icon Recipes  */
add_action('admin_head', 'add_menu_icons_styles');
function add_menu_icons_styles()
{
    echo <<<'TAG'
<style> #menu-posts-recipe  div.dashicons-admin-post:before {  content: "\f511"; }</style>
TAG;
}


/* Add Taxonomies Cacao - Level - Chef */
add_action('init', 'create_recipe_taxonomies', 0);
function create_recipe_taxonomies()
{
    /* Cacao */
    $labels = array(
        'name' => _x('Chocolates'),
        'singular_name' => _x('Chocolate'),
        'search_items' => __('Buscar por Chocolate'),
        'popular_items' => __('Chocolates populares'),
        'all_items' => __('Todos los Chocolates'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar Chocolate'),
        'update_item' => __('Actualizar Chocolate'),
        'add_new_item' => __('Añadir nuevo Chocolate'),
        'new_item_name' => __('Nombre del nuevo Chocolate'),
        'separate_items_with_commas' => __('Separar Chocolates por comas'),
        'add_or_remove_items' => __('Añadir o eliminar Chocolates'),
        'choose_from_most_used' => __('Escoger entre los Chocolates más utilizados')
    );
    register_taxonomy('cacao', array('recipe'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'chocolate')
    ));


    /* Niveles */
    $labels = array(
        'name' => _x('Nivel'),
        'singular_name' => _x('Niveles'),
        'search_items' => __('Buscar Nivel'),
        'popular_items' => __('Niveles populares'),
        'all_items' => __('Todos los Niveles'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar Nivel'),
        'update_item' => __('Actualizar Nivel'),
        'add_new_item' => __('Añadir nuevo Nivel'),
        'new_item_name' => __('Nombre del nuevo Nivel'),
        'separate_items_with_commas' => __('Separar Niveles por comas'),
        'add_or_remove_items' => __('Añadir o eliminar Nivel'),
        'choose_from_most_used' => __('Escoger entre los Nivel más utilizados')
    );

    register_taxonomy('level', array('recipe'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Niveles'),
    ));


    /* Chef */
    $labels = array(
        'name' => _x('Chef'),
        'singular_name' => _x('Chefs'),
        'search_items' => __('Buscar Chefs'),
        'popular_items' => __('Chefs populares'),
        'all_items' => __('Todos los Chefs'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar Chef'),
        'update_item' => __('Actualizar Chef'),
        'add_new_item' => __('Añadir nuevo Chef'),
        'new_item_name' => __('Nombre del nuevo Chef'),
        'separate_items_with_commas' => __('Separar Chef por comas'),
        'add_or_remove_items' => __('Añadir o eliminar Chef'),
        'choose_from_most_used' => __('Escoger entre los Chef más utilizados')
    );

    register_taxonomy('chef', array('recipe'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Chefs'),
    ));
}


/* Add boxes recipes */
add_action("add_meta_boxes", "recipes_metabox");
function recipes_metabox()
{
    add_meta_box(
        "ingredients",
        "Ingredientes",
        "box_recipes_print",
        "recipe",
        "normal",
        "high"
    );
}
function box_recipes_print()
{
    global $post;
    wp_nonce_field("udp_metabox_nonce", "udp_box_nonce");
    $meta = get_post_meta($post->ID, 'ingredient', true);
    $metaD = get_post_meta($post->ID, 'directions', true);
    ?>
    <p>
        <label for="<?php echo 'ingredient' ?>">Ingredientes</label><br>
        <?php wp_editor($meta, 'ingredient') ?>
    </p>

    <p>
        <label for="<?php echo 'directions' ?>">Preparación</label><br>
        <?php wp_editor($metaD, 'directions') ?>
    </p>
    <?php
}

/* Save Post */
add_action("save_post", "udp_save_metabox");
function udp_save_metabox($post_id)
{

    //si no lleva la variable post meta_box_nonce o no concuerda con udp_metabox_nonce salimos
    if (!isset($_POST["udp_box_nonce"]) || !wp_verify_nonce($_POST["udp_box_nonce"], "udp_metabox_nonce")) {
        return;
    }
    //si es un autoguardado salimos
    if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE) {
        return;
    }
    //si el usuario no tiene privilegios salimos
    if (!current_user_can("edit_post")) {
        return;
    }

    update_post_meta($post_id,'ingredient', $_POST['ingredient'] );
    update_post_meta($post_id,'directions', $_POST['directions'] );

}

/* Add field image chef */
add_action( 'chef_add_form_fields', 'chef_add_new_meta_fields', 10, 2 );
function chef_add_new_meta_fields(){
    ?>
    <div>
        <label for="term_meta[imagen]">
            <input type="text" name="term_meta[imagen]" size="36" id="upload_image" value=""><br>
            <input id="upload_image_button" type="button" class='button button-primary' value="Subir Imagen" />
            <br/><i>Introduce una URL o establece una imagen para este campo.</i>
        </label>
    </div>
    <?php
}

/* Add script image  */
add_action( 'admin_enqueue_scripts', 'my_enqueue' );
function my_enqueue() {
    wp_enqueue_media();
    wp_enqueue_script( 'my_custom_script', themeDirUri . '/functions/admin.js' );
}

/* Add field in edit chef  */
function chef_edit_meta_fields($term){
    $t_id = $term->term_id;

    $term_meta = get_option("taxonomy_$t_id");
    ?>
    <tr valign="top" class='form-field'>
        <th scope="row">Subir imagen</th>
        <td>
            <label for="upload_image">
                <input id="upload_image" type="text" size="36" name="term_meta[imagen]" value="<?php if( esc_attr( $term_meta['imagen'] ) != "") echo esc_attr( $term_meta['imagen'] ) ; ?>" />
                <p><input id="upload_image_button" type="button" class='button button-primary' style='width: 100px' value="Subir Imagen" />
                    <i>Introduce una URL o establece una imagen para este campo.</i></p>
            </label>
            <p><?php if( esc_attr( $term_meta['imagen'] ) != "" ) echo "<table><tr><td><i><strong>Imagen actual</strong></i>:</td><td> <img src='".esc_attr( $term_meta['imagen'] )."'></td></tr></table>"; ?></p>
        </td>
    </tr>
    <?php
}
add_action( 'chef_edit_form_fields', 'chef_edit_meta_fields', 10, 2 );


/* Save edit and create chef */
function chef_save_custom_meta( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {

        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_$t_id" );
        $cat_keys = array_keys( $_POST['term_meta'] );
        foreach ( $cat_keys as $key ) {
            if ( isset ( $_POST['term_meta'][$key] ) ) {
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        update_option( "taxonomy_$t_id", $term_meta );
    }

}
add_action( 'edited_chef', 'chef_save_custom_meta', 10, 2 );
add_action( 'create_chef', 'chef_save_custom_meta', 10, 2 );




/* Add field image chef */
add_action( 'cacao_add_form_fields', 'cacao_add_new_meta_fields', 10, 2 );
function cacao_add_new_meta_fields(){
    ?>
    <div>
        <label for="term_meta[imagen]">
            <input type="text" name="term_meta[imagen]" size="36" id="upload_image" value=""><br>
            <input id="upload_image_button" type="button" class='button button-primary' value="Subir Imagen" />
            <br/><i>Introduce una URL o establece una imagen para este campo.</i>
        </label>
    </div>
    <?php
}



/* Add field in edit chef  */
function cacao_edit_meta_fields($term){
    $t_id = $term->term_id;

    $term_meta = get_option("taxonomy_$t_id");
    ?>
    <tr valign="top" class='form-field'>
        <th scope="row">Subir imagen</th>
        <td>
            <label for="upload_image">
                <input id="upload_image" type="text" size="36" name="term_meta[imagen]" value="<?php if( esc_attr( $term_meta['imagen'] ) != "") echo esc_attr( $term_meta['imagen'] ) ; ?>" />
                <p><input id="upload_image_button" type="button" class='button button-primary' style='width: 100px' value="Subir Imagen" />
                    <i>Introduce una URL o establece una imagen para este campo.</i></p>
            </label>
            <p><?php if( esc_attr( $term_meta['imagen'] ) != "" ) echo "<table><tr><td><i><strong>Imagen actual</strong></i>:</td><td> <img src='".esc_attr( $term_meta['imagen'] )."'></td></tr></table>"; ?></p>
        </td>
    </tr>
    <?php
}
add_action( 'cacao_edit_form_fields', 'cacao_edit_meta_fields', 10, 2 );


/* Save edit and create chef */
function cacao_save_custom_meta( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {

        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_$t_id" );
        $cat_keys = array_keys( $_POST['term_meta'] );
        foreach ( $cat_keys as $key ) {
            if ( isset ( $_POST['term_meta'][$key] ) ) {
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        update_option( "taxonomy_$t_id", $term_meta );
    }

}
add_action( 'edited_cacao', 'cacao_save_custom_meta', 10, 2 );
add_action( 'create_cacao', 'cacao_save_custom_meta', 10, 2 );