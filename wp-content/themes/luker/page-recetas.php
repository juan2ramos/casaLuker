<?php
get_header();
$chefs = get_terms("chef", array("hide_empty" => false));
$cacaos = get_terms("cacao", array("hide_empty" => false));
$levels = get_terms("level", array("hide_empty" => false));
?>

<h2 class="Recipes-h2">NUESTROS CHEFS</h2>
<h3 class="Recipes-h3">CONOCE TODAS LAS RECETAS DE NUESTROS CHEFS.</h3>
<div class="Recipes-chefs">
    <div class="Recipes-chefsBack">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32"
             height="32" viewBox="0 0 32 32">
            <path fill="#fff" d="M1 16l15 15v-9h16v-12h-16v-9z"></path>
        </svg>
    </div>
    <?php foreach ($chefs as $cat) : $nameChef = explode(" ", $cat->name) ?>
        <figure data-filter=".<?php echo $cat->slug ?>">
            <div class="Recipes-chefsContent">
                <h3><?php print_r($nameChef[0]) ?></h3>
                <h4><?php print_r($nameChef[1]) ?></h4>
            </div>
            <p class="Recipes-chefsDescription"><?php print_r($cat->description) ?></p>
            <img src="<?php print_r(get_option("taxonomy_" . $cat->term_id)['imagen']); ?>" alt="">
            <span class="Recipes-view">VER SUS RECETAS</span>
        </figure> <?php endforeach ?>
</div>

<form class="controls" id="Filters">

    <fieldset>
        <select id="chef">
            <option value="">Hecho por</option>
            <?php foreach ($chefs as $cat): ?>
                <option value=".<?php print_r($cat->slug); ?>"> <?php print_r($cat->name); ?> </option>
            <?php endforeach ?>
        </select>
    </fieldset>

    <fieldset>

        <select>
            <option value="">Chocolate</option>
            <?php foreach ($cacaos as $cat): ?>
                <option value=".<?php print_r($cat->slug); ?>"> <?php print_r($cat->name); ?> </option>
            <?php endforeach ?>
        </select>
    </fieldset>

    <fieldset>
        <select>
            <option value="">Dificultad</option>
            <?php foreach ($levels as $cat): ?>
                <option value=".<?php print_r($cat->slug); ?>"> <?php print_r($cat->name); ?> </option>
            <?php endforeach ?>
        </select>
    </fieldset>


    <!--<button id="Reset">Clear Filters</button>-->
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
                <hr>
                <?php the_title(); ?>
                <hr>
            </figcaption>


        </div>
    <?php endwhile; ?>

</main>


<?php wp_enqueue_script('mixitup', 'http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js?v=2.1.2', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('mixScript', get_template_directory_uri() . '/assets/js/mixitup.js', array('jquery'), 1, false); ?>

<?php get_footer(); ?>


