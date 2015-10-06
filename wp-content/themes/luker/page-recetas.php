<?php get_header(); ?>
    <form class="controls" id="Filters">
        <!-- We can add an unlimited number of "filter groups" using the following format: -->

        <fieldset>
            <h4>Nivel</h4>
            <select>
                <option value="">Todos</option>
                <option value=".one">1</option>
                <option value=".two">2</option>
                <option value=".three">3</option>
            </select>
        </fieldset>

        <fieldset>
            <h4>Chocolates</h4>

            <select>
                <option value="">Todos</option>
                <option value=".luker-1906">luker 1906</option>
                <option value=".luker-cacao">luker cacao</option>
                <option value=".luker-maracas">luker-maracas</option>
            </select>
        </fieldset>

        <fieldset>
            <h4>Chef</h4>

            <select>
                <option value="">Todos</option>
                <option value=".alessandro-bertuzzi">Alessandro Bertuzzi</option>
                <option value=".emmanuel-hamon">Emmanuel Hamon</option>
                <option value=".stanto-ho">Stanto Ho</option>
            </select>
        </fieldset>

        <button id="Reset">Clear Filters</button>
    </form>

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
            <div class="mix <?php echo $cacao . " " . $chef . " " . $level ?>">
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