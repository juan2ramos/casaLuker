<?php
get_header();
$chefs = get_terms("chef", array("hide_empty" => false));
$cacaos = get_terms("cacao", array("hide_empty" => false));
$levels = get_terms("level", array("hide_empty" => false));
?>

<h2 class="Recipes-h2 Main">NUESTROS CHEFS</h2>
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

<form class="controls" id="Filters" action="<?php echo site_url(); ?>" data-url="<?php echo site_url(); ?>">

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
        <div class="mix <?php echo $cacao . " " . $chef . " " . $level ?>" data-name="<?php echo $post->post_name; ?>">
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

<section class="RecipeDetail">
    <header class="RecipeDetail-header">
        <div class="RecipeDetail-headerContent">
            <div class="RecipeDetail-headerTitle"></div>
            <div class="RecipeDetail-bar">
                <h2>TYPE OF CHOCOLATE <span id="imageCocoa"></span> </h2>
                <span class="RecipeDetail-barClose">
                    <div class="pdf">
                        <a href="<?php get_post_meta( get_the_ID(), 'pdf' ); ?>" target="_blank">pdf <span> ► </span></a>
                    </div>
                    <div class="gr">
                         gr <span>►</span>
                    </div>
                    <svg version="1.1" id="closeX" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <line class="st0" x1="57.7" y1="0.8" x2="0" y2="56.9"/>
                            <line class="st0" x1="0" y1="0" x2="57.7" y2="57.7"/>
                        </g>
                    </svg>
                </span>
            </div>
        </div>
        <div class="RecipeDetailBarBottom">
            <ul>
                <li><p>CHEF <span id="chefName"></span></p></li>
                <li><p>SERVINGS <span id="servings"></span></p></li>
                <li>
                    <p>DIFFICULTY LEVEL
                        <span id="level">
                            <svg version="1.1" class="cacaoSvg " xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="-749 388.4 486.1 641.9" style="enable-background:new -749 388.4 486.1 641.9;"
                                 xml:space="preserve">
                                <g>
                                    <path class="st1" d="M-287.7,403.7c0,0-516,3-442.5,611.3C-730.3,1015-183.6,1007.7-287.7,403.7z"/>
                                </g>
                            </svg>
                            <svg version="1.1" class="cacaoSvg " xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="-749 388.4 486.1 641.9" style="enable-background:new -749 388.4 486.1 641.9;"
                                 xml:space="preserve">
                                <g>
                                    <path class="st1" d="M-287.7,403.7c0,0-516,3-442.5,611.3C-730.3,1015-183.6,1007.7-287.7,403.7z"/>
                                </g>
                            </svg>
                            <svg version="1.1" class="cacaoSvg " xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="-749 388.4 486.1 641.9" style="enable-background:new -749 388.4 486.1 641.9;"
                                 xml:space="preserve">
                                <g>
                                    <path class="st1" d="M-287.7,403.7c0,0-516,3-442.5,611.3C-730.3,1015-183.6,1007.7-287.7,403.7z"/>
                                </g>
                            </svg>
                        </span>
                    </p>
                </li>
            </ul>
        </div>
    </header>
    <article id="RecipeDetail-content"></article>
    <footer class="RecipeDetail-footer">
        <figure id="RecipeDetail-figure"></figure>
        <div class="RecipeDetail-chef">
            <div class="RecipeDetail-chefContent">
                <h3></h3>

                <p></p>
            </div>
        </div>
        <div class="suscribe">
            <div class="suscribe-content">
                <h5>GET MORE INFO ABOUT CACAO</h5>
                <button>suscribe</button>
            </div>
        </div>
    </footer>
</section>
<div class="loading"></div>

<?php wp_enqueue_script('mixitup', 'http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js?v=2.1.2', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('mixScript', get_template_directory_uri() . '/assets/js/mixitup.js', array('jquery'), 1, false); ?>

<?php get_footer(); ?>


