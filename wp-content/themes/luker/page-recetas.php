<?php get_header(); ?>

    <button class="filter" data-filter=".1">Category 1</button>
    <button class="filter" data-filter=".luker-1906">luker-1906</button>
    <button class="filter" data-filter=".emmanuel-hamon ">emmanuel-hamon </button>
    <main class="Recipes" id="Recipes">


        <?php

        $args = array('post_type' => 'recipe', 'order' => 'DESC',);
        $query = new WP_Query($args);

        while ($query->have_posts()) : $query->the_post(); // print_r(get_the_terms($post->ID, 'cacao'));?>
            <?php
            $cacao = get_the_terms($post->ID, 'cacao')[0]->slug;
            $chef = get_the_terms($post->ID, 'chef')[0]->slug;
            $level = get_the_terms($post->ID, 'level')[0]->slug;
            ?>
            <div class="Recipes-box mix <?php echo $cacao . " " . $chef . " " . $level ?>">
                <figure class="Recipes-figure">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <figcaption>
                    <?php the_title(); ?>
                </figcaption>


            </div>
        <?php endwhile; ?>
    </main>
<?php wp_enqueue_script('mixitup', 'http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js?v=2.1.2', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('mixScript', get_template_directory_uri() . '/assets/js/mixitup.js', array('jquery'), 1, false); ?>

<?php get_footer(); ?>