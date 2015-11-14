<?php
/*
Description: Home
Theme: Luker
*/
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
    <source src="<?php bloginfo('template_url') ?>/assets/videos/home.mp4" type="video/mp4">
</video>
<h1 class="Logo">
    <figure class="Logo-img">
        <img src="<?php bloginfo('template_url') ?>/assets/images/logo-casa-luker.png" alt="">
    </figure>
</h1>
<nav class="NavHome">
    <ul class="NavHome-ul">
        <li>
            <a href="<?php echo bloginfo('url')?>/cacao-fino-de-aroma">
                <figure class="NavHome-figureOne">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/cacao-fino-de-aroma-large.png"
                         alt="">
                </figure>
                <h2> <?php _e('cacao fino de aroma','luker'); ?>  </h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')?>/productos">
                <figure class="NavHome-figureTwo">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/productos-large.png" alt="">
                </figure>
                <h2> <?php _e('Productos','luker'); ?></h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')?>/a-su-medida">
                <figure class="NavHome-figureTree">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/a-su-medida-large.png" alt="">
                </figure>
                <h2><?php _e('','luker'); ?>A su medida</h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')?>/the-luker-way">
                <figure class="NavHome-figureFour">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/the-luker-way-large.png" alt="">
                </figure>
                <h2>The Luker Way</h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')?>/casaluker">
                <figure class="NavHome-figureFive">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/casa-luker-large.png" alt="">
                </figure>
                <h2>CasaLuker</h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')?>/granja-luker">
                <figure class="NavHome-figureSix">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/granja-luker-large.png" alt="">
                </figure>
                <h2><?php _e('Granja','luker'); ?> <span>Luker  </span></h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')?>/recetas">
                <figure class="NavHome-figureSeven">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/recetas.png" alt="">
                </figure>
                <h2><?php _e('Recetas','luker'); ?></h2>
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url')?>/noticias">
                <figure class="NavHome-figureEight">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/noticias.png" alt="">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/contactenos.png" alt="">
                </figure>
                <h2><?php _e('Noticias','luker'); ?> </h2>

                <a href="<?php echo bloginfo('url')?>/contactanos"><h2 class="end"><?php _e('Contáctenos','luker'); ?></h2></a>
            </a>
        </li>
    </ul>
</nav>
<?php include TEMPLATEPATH . '/inc/BarFooter.php' ?>
<?php wp_footer(); ?>
</body>
</html>