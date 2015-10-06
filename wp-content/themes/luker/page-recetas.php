<?php
get_header();
$chefs = get_terms("chef", array("hide_empty" => false));
$cacaos = get_terms("cacao", array("hide_empty" => false));
$levels = get_terms("level", array("hide_empty" => false));
?>

<h2>NUESTROS CHEFS</h2>
<h3>CONOCE TODAS LAS RECETAS DE NUESTROS CHEFS.</h3>
<?php foreach ($chefs as $cat) {
    print_r(get_option("taxonomy_" . $cat->term_id)['imagen']);
} ?>


<?php foreach ($cacaos as $cat) {
    print_r($cat->slug);
} ?>
<form class="controls" id="Filters">

    <fieldset>
        <h4>Chef</h4>

        <select>
            <option value="">Todos</option>
            <?php foreach ($chefs as $cat):  ?>
                <option value=" <?php print_r($cat->slug); ?>"> <?php print_r($cat->name); ?> </option>
            <?php endforeach ?>
        </select>
    </fieldset>

    <fieldset>
        <h4>Chocolates</h4>

        <select>
            <option value="">Todos</option>
            <?php foreach ($cacaos as $cat):  ?>
                <option value=" <?php print_r($cat->slug); ?>"> <?php print_r($cat->name); ?> </option>
            <?php endforeach ?>
        </select>
    </fieldset>

    <fieldset>
        <h4>Nivel</h4>
        <select>
            <option value="">Todos</option>
            <?php foreach ($levels as $cat):  ?>
                <option value=" <?php print_r($cat->slug); ?>"> <?php print_r($cat->name); ?> </option>
            <?php endforeach ?>
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


