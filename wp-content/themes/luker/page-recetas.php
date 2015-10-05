<?php get_header(); ?>
    <main class="Recipes">


        <?php


        $args = array('post_type' => 'recipe','order'   => 'DESC',);
        $query = new WP_Query($args);

        while ($query->have_posts()) : $query->the_post(); // print_r(get_the_terms($post->ID, 'cacao'));?>
            <div class="Recipes-box mix <?php print_r(get_the_terms($post->ID, 'cacao')); print_r(get_the_terms($post->ID, 'chef')); print_r(get_the_terms($post->ID, 'level')); ?> ">
                <figure class="Recipes-figure">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <figcaption>
                    <?php the_title(); ?>
                </figcaption>


            </div>
        <?php endwhile; ?>
    </main>
<?php wp_enqueue_script( 'mixitup', 'http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js?v=2.1.2', array('jquery'), 1, false ); ?>
<?php wp_enqueue_script( 'mixScript', get_template_directory_uri().'/assets/js/mixitup.js', array(''), 1, false ); ?>

<?php get_footer(); ?>