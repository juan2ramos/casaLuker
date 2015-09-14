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
            <a href="">
                <figure class="NavHome-figureOne">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/cacao-fino-de-aroma-large.png"
                         alt="">
                </figure>
                <h2>cacao fino de aroma </h2>
            </a>
        </li>
        <li>
            <a href="">
                <figure class="NavHome-figureTwo">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/productos-large.png" alt="">
                </figure>
                <h2>Productos</h2>
            </a>
        </li>
        <li>
            <a href="">
                <figure class="NavHome-figureTree">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/a-su-medida-large.png" alt="">
                </figure>
                <h2>A su medida</h2>
            </a>
        </li>
        <li>
            <a href="">
                <figure class="NavHome-figureFour">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/the-luker-way-large.png" alt="">
                </figure>
                <h2>The Luker</h2>
            </a>
        </li>
        <li>
            <a href="">
                <figure class="NavHome-figureFive">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/casa-luker-large.png" alt="">
                </figure>
                <h2>CasaLuker</h2>
            </a>
        </li>
        <li>
            <a href="">
                <figure class="NavHome-figureSix">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/granja-luker-large.png" alt="">
                </figure>
                <h2>Granja <span>Luker</span></h2>
            </a>
        </li>
        <li>
            <a href="">
                <figure class="NavHome-figureSeven">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/recetas.png" alt="">
                </figure>
                <h2>Recetas</h2>
            </a>
        </li>
        <li>
            <a href="">
                <figure class="NavHome-figureEight">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/noticias.png" alt="">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/home/contactenos.png" alt="">
                </figure>
                <h2>Noticias</h2>

                <h2 class="end">Contactenos</h2>
            </a>
        </li>
    </ul>
</nav>
<div class="FooterHome">
    <span class="FooterHome-copy">© 2012-CasaLuker ®</span>
    <div class="FooterHome-wrapper">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="FooterHome-search"><?php dynamic_sidebar( 'widgetFooter' ); ?> </div>
        <div class="FooterHome-navNetwork">
            <ul>
                <li><a href="https://www.facebook.com/LUKERFOODINGREDIENTS" target="_blank"><span class="icon-facebook"> </span></a></li>
                <li><a href="https://twitter.com/LUKEROFFICIAL" target="_blank"><span class="icon-twitter"> </span></a></li>
                <li><a href="https://www.youtube.com/channel/UCY_NfrnYxNHFP0KD0EKA8Gg" target="_blank"><span class="icon-play3"> </span></a></li>
                <li><a href="https://instagram.com/lukerofficial/" target="_blank"><span class="icon-instagram"> </span></a></li>
                <li><a href="https://www.linkedin.com/company/casaluker-food-ingredients?trk=company_name" target="_blank"><span class="icon-linkedin2"> </span></a></li>
            </ul>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>