<?php
/*
Description: Home
Theme: Luker
*/
$lang = get_bloginfo('language');
$url = array(
    "en-US" => array(
        'cacao' => 'cacao-fino-de-aroma-en',
        'productos' => 'product',
        'medida' => 'tailor-made-innovation',
        'lukerWay' => 'the-luker-way',
        'casaluker' => 'casaluker',
        'granja-luker' => 'granja-luker',
        'recetas' => 'recipes',
        'noticias' => 'news',
        'contactanos' => 'contact'
    ),
    "es-CO" => array(
        'cacao' => 'cacao-fino-de-aroma',
        'productos' => 'productos',
        'medida' => 'a-su-medida',
        'lukerWay' => 'the-luker-way-es',
        'casaluker' => 'casaluker-es',
        'granja-luker' => 'granja-luker-es',
        'recetas' => 'recetas',
        'noticias' => 'noticias',
        'contactanos' => 'contactanos'
    ),
    "de-DE" => array(
        'cacao' => 'cacao-fino-de-aroma-de',
        'productos' => 'produkte',
        'medida' => 'kundenwunsch',
        'lukerWay' => 'the-luker-way-de',
        'granja-luker' => 'granja-luker-de',
        'casaluker' => 'casaluker-de',
        'recetas' => 'rezepte',
        'noticias' => 'aktuell',
        'contactanos' => 'kontakt'
    ),
    "fr-FR" => array(
        'cacao' => 'cacao-fino-de-aroma-fr',
        'productos' => 'produits',
        'medida' => 'linnovation-sur-mesure',
        'granja-luker' => 'granja-luker-fr',
        'lukerWay' => 'the-luker-way-fr',
        'casaluker' => 'casaluker-fr',
        'recetas' => 'recettes',
        'noticias' => 'nouvelles',
        'contactanos' => 'contactez-nous'
    ),
    "it-IT" => array(
        'cacao' => 'cacao-fino-de-aroma-it',
        'productos' => 'prodotto',
        'medida' => 'innovazione-su-misura',
        'lukerWay' => 'the-luker-way-it',
        'granja-luker' => 'granja-luker-it',
        'casaluker' => 'casaluker-it',
        'recetas' => 'ricette',
        'noticias' => 'notizie',
        'contactanos' => 'contatti'
    ),
    "sk-SK" => array(
        'cacao' => 'cacao-fino-de-aroma-sk',
        'productos' => 'produkty',
        'medida' => 'vylepsenia-na-mieru',
        'lukerWay' => 'the-luker-way-sk',
        'casaluker' => 'casaluker-sk',
        'granja-luker' => 'granja-luker-sk',
        'recetas' => 'recepty',
        'noticias' => 'novinky',
        'contactanos' => 'kontakty'
    ),
    "ru-RU" => array(
        'cacao' => 'cacao-fino-de-aroma-ru',
        'productos' => 'products',
        'medida' => 'tailor-made-innovation-ru',
        'lukerWay' => 'the-luker-way-ru',
        'granja-luker' => 'granja-luker-ru',
        'casaluker' => 'casaluker-ru',
        'recetas' => 'recipes-ru',
        'noticias' => 'news-ru',
        'contactanos' => 'contact-ru'
    )
);

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Casa Luker<?php wp_title(' | '); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico">

    <!---- TYPEKIT -- -->
    <script type="text/javascript" src="http://use.typekit.com/uuf1qmf.js"></script>
    <script type="text/javascript">try {
            Typekit.load();
        } catch (e) {
        }</script>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-template="<?php bloginfo('template_url') ?>">
<!-- PRELOADER -->
<div class="PageLoader">
    <div class="PageLoader-load">Loading...</div>
</div>
<!-- /PRELOADER -->


<video autoplay loop class="WrapperHome-videoSource" muted>
    <source src="<?php bloginfo('template_url') ?>/assets/videos/<?php echo rand(1, 3);?>.mp4" type="video/mp4">
</video>
<h1 class="Logo">
    <figure class="Logo-img">
        <img src="<?php bloginfo('template_url') ?>/assets/images/logo-casa-luker.png" alt="">
    </figure>
</h1>
<nav class="NavHome">
    <ul class="NavHome-ul">
        <li>
            <a href="<?php echo bloginfo('url') . '/' . $url[get_bloginfo('language')]['cacao'] ?>">
                <figure class="NavHome-figureOne">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/cacao-fino-de-aroma-large.png"
                         alt="">
                </figure>
                <h2> <?php _e('cacao fino de aroma', 'luker'); ?>  </h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')  . '/' . $url[get_bloginfo('language')]['productos'] ?>">
                <figure class="NavHome-figureTwo">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/productos-large.png" alt="">
                </figure>
                <h2> <?php _e('Products', 'luker'); ?></h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')   . '/' . $url[get_bloginfo('language')]['medida'];?>">
                <figure class="NavHome-figureTree">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/a-su-medida-large.png" alt="">
                </figure>
                <h2><?php _e('Tailor Made Innovation', 'luker'); ?></h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url') . '/' .  $url[get_bloginfo('language')]['lukerWay'];?>">
                <figure class="NavHome-figureFour">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/the-luker-way-large.png" alt="">
                </figure>
                <h2>The Luker Way</h2>
            </a>
        </li>

        <li>
            <a href="<?php echo bloginfo('url') . '/' .   $url[get_bloginfo('language')]['casaluker'];?>">
                <figure class="NavHome-figureFive">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/casa-luker-large.png" alt="">
                </figure>
                <h2>CasaLuker</h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url') . '/' .  $url[get_bloginfo('language')]['recetas']; ?>">
                <figure class="NavHome-figureSix">
                    <img src="<?php bloginfo('template_url') . '/' .  $url[get_bloginfo('language')]['granja-luker']; ?>/assets/images/home/granja-luker-large.png" alt="">
                </figure>
                <h2><?php _e('Granja', 'luker'); ?> <span>Luker  </span></h2>
            </a>
        </li>

        <li>
            <a href="<?php echo bloginfo('url') . '/' .  $url[get_bloginfo('language')]['recetas']; ?>">
                <figure class="NavHome-figureSeven">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/recetas.png" alt="">
                </figure>
                <h2><?php _e('Recipes', 'luker'); ?></h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')  . '/' . $url[get_bloginfo('language')]['noticias']; ?>">
                <figure class="NavHome-figureEight">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/noticias.png" alt="">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/contactenos.png" alt="">
                </figure>
                <h2><?php _e('news', 'luker'); ?> </h2>

                <a href="<?php echo bloginfo('url') . '/' .   $url[get_bloginfo('language')]['contactanos']; ?>"><h2
                        class="end"><?php _e('contact', 'luker'); ?></h2></a>
            </a>
        </li>
    </ul>
</nav>
<?php include TEMPLATEPATH . '/inc/BarFooter.php' ?>
<?php wp_footer(); ?>
</body>
</html>