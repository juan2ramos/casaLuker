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

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    load_theme_textdomain('luker', get_template_directory() . '/languages');

}

/* Add Events */
add_action('init', 'registerEvents');
function registerEvents()
{
    $labels = array(
        'name' => __('Eventos'),
        'singular_name' => __('Evento'),
        'add_new' => __('Añadir Eventos', 'Eventos'),
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
        'name' => __('Noticias'),
        'singular_name' => __('Noticia'),
        'add_new' => __('Añadir Noticias', 'Noticias'),
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

function wp_corenavi($prev = '«', $next = '»')
{
    global $query, $wp_rewrite;
    $query->query_vars['paged'] > 1 ? $current = $query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged', '%#%'),
        'format' => '',
        'total' => $query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain',
        'prev_text' => __('Anterior'),
        'next_text' => __('Siguiente')
    );
    $startPage = ($pagination['current'] == 1) ? '' : '<a href="' . get_site_url() . '/noticias/page/' . 1 . '"> Inicio </a>';
    $endPage = ($pagination['current'] == $pagination['total']) ? '' : '<a href="' . get_site_url() . '/noticias/page/' . $pagination['total'] . '"> Final </a>';


    if ($wp_rewrite->using_permalinks())
        $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
    if (!empty($query->query_vars['s']))
        $pagination['add_args'] = array('s' => get_query_var('s'));

    echo 'Pagina ' . $pagination['current'] . ' de ' . $pagination['total'] . '';
    echo '<div class="Pagination-right">' . $startPage . paginate_links($pagination) . $endPage . '</div>';

}

function my_page_template_redirect()
{

    global $post;
    $arrayUrl = array(
        'cacao-fino-de-aroma-en' => 'page-cacao-fino-de-aroma',
        'casaluker-es' => 'page-casaluker',
        'news' => 'page-noticias',
        'tailor-made-innovation' => 'page-a-su-medida',
        'luker-1906-es' => 'page-luker-1906',
        'the-luker-way-es' => 'page-the-luker-way',
        'product' => 'page-productos'

    );
    if(array_key_exists( get_post($post)->post_name , $arrayUrl) ){


        if (!get_page_template() && !is_home() ) {

            get_template_part($arrayUrl[get_post($post)->post_name]);
            exit;
        }
    }
}

add_action('template_redirect', 'my_page_template_redirect');