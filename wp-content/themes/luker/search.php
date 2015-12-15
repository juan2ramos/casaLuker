<?php
get_header(); ?>

    <main>

        <div id="content" class="site-content" role="main">

            <?php


            while (have_posts()) : the_post(); ?>
                <a style="color: white" href="<?php echo get_permalink() ?>">
                    <?php
                    if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                        ?>
                        <figure style="margin: 1em 40px 1em 0; float: left;max-width: 200px; width: 200px;">
                            <?php the_post_thumbnail(array(200, 'auto')); ?>

                        </figure>
                    <?php } ?>


                    <?php print_r(the_excerpt()); ?>
                    <div style="clear: both"></div>
                </a>

            <?php endwhile; // end of the loop. ?>

            <?php
            global  $wp_rewrite;
            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
            $pagination = array(
                'base' => @add_query_arg('paged', '%#%'),
                'format' => '',
                'total' => $wp_query->max_num_pages,
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

            ?>
        </div><!-- #content .site-content -->
    </main>

<?php get_footer(); ?>