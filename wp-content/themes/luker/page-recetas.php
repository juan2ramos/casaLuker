<?php get_header(); ?>
    <main class="Recipes">


        <?php


        $args = array('post_type' => 'recipe','order'   => 'DESC',);
        $query = new WP_Query($args);

        while ($query->have_posts()) : $query->the_post(); // print_r(get_the_terms($post->ID, 'cacao'));?>
            <div class="Recipes-box">
                <figure class="Recipes-figure">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <figcaption>
                    <?php the_title(); ?>
                </figcaption>


            </div>
        <?php endwhile; ?>
    </main>
<?php get_footer(); ?>