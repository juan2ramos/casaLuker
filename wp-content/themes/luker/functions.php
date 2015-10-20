<?php
/*
Description: WP Functions - Theme init
Theme: Luker
*/

define('themeDir', get_template_directory() . '/');
define('themeDirUri', get_template_directory_uri());


require(themeDir . 'functions/functions.php');
require(themeDir . 'functions/recipes.php');
require(themeDir . 'functions/ofertas_widget.php');


/* Add Events */
add_action('init', 'registerEvents');
function registerEvents()
{
    $labels = array(
        'name' => _x('Eventos'),
        'singular_name' => _x('Evento'),
        'add_new' => _x('Añadir Eventos', 'Eventos'),
        'add_new_item' => __('Añadir nuevo Evento'),
        'edit_item' => __('Editar Evento'),
        'new_item' => __('Nuevo Evento'),
        'view_item' => __('Ver Evento'),
        'search_items' => __('Buscar Evento'),
        'not_found' => __('No se han encontrado Eventos'),
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

    register_post_type('registerEvents', $args);
}


/* Add News */
add_action('init', 'registerNews');
function registerNews()
{
    $labels = array(
        'name' => _x('Noticias'),
        'singular_name' => _x('Noticia'),
        'add_new' => _x('Añadir Noticias', 'Noticias'),
        'add_new_item' => __('Añadir nueva Noticia'),
        'edit_item' => __('Editar Noticia'),
        'new_item' => __('Nueva Noticia'),
        'view_item' => __('Ver Noticia'),
        'search_items' => __('Buscar Noticias'),
        'not_found' => __('No se han encontrado Noticias'),
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

    register_post_type('registerNews', $args);
}

function wp_corenavi()
{
    global $query, $wp_rewrite;
    $pages = '';
    $max = $query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;
    echo $max;
    $total = 1; //1 – muestra el texto “Página N de N”, 0 – para no mostrar nada
    $a['mid_size'] = 5; //cuantos enlaces a mostrar a izquierda y derecha del actual
    $a['end_size'] = 1; //cuantos enlaces mostrar al comienzo y al fin
    $a['prev_text'] = '&laquo; Anterior'; //texto para el enlace “Página siguiente”
    $a['next_text'] = 'Siguiente &raquo;'; //texto para el enlace “Página anterior”

    if ($max > 1) echo '<div class="navigation">';
    if ($total == 1 && $max > 1)
        $pages = '<span class="pages">Página ' . $current . ' de ' . $max . '</span>' . "\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}
