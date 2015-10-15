<?php
/*
Description: The Header
Theme: Luker
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php the_title(); ?> - Casa Luker</title>

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

<body <?php body_class(); ?>>


<?php the_post(); ?>
<header class="Header" style="
    background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')['0'] ?>)
    ">
    <div class="ButtonNav">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="Header-wrapper">
        <span class="Close">X</span>
        <span class="Language">ES</span>
        <figure class="Header-logo">
            <a href="<?php bloginfo('url') ?>"><img
                    src="<?php bloginfo('template_url') ?>/assets/images/logo-casa-luker.png" alt="Logo Casa Luker"></a>
        </figure>
        <div class="Nav">
            <?php wp_nav_menu(array('theme_location' => 'menuHeader', 'container' => 'nav')) ?>
        </div>


        <div class="Header-bar">
            <div class="Search"><?php dynamic_sidebar('widgetSearchFooter'); ?> </div>
            <ul class="Header-navNetwork">
                <li><a href="https://www.facebook.com/LUKERFOODINGREDIENTS" target="_blank"><span
                            class="icon-facebook"> </span></a></li>
                <li><a href="https://twitter.com/LUKEROFFICIAL" target="_blank"><span class="icon-twitter"> </span></a></li>
                <li><a href="https://www.youtube.com/channel/UCY_NfrnYxNHFP0KD0EKA8Gg" target="_blank"><span
                            class="icon-play3"> </span></a></li>
                <li><a href="https://instagram.com/lukerofficial/" target="_blank"><span class="icon-instagram"> </span></a>
                </li>
                <li><a href="https://www.linkedin.com/company/casaluker-food-ingredients?trk=company_name"
                       target="_blank"><span class="icon-linkedin2"> </span></a></li>
            </ul>
            <div class="Header-news">
                Recibe más Información
            </div>
        </div>
        <div class="Header-barMobile">
            <div class="Search"><?php dynamic_sidebar('widgetSearchFooter'); ?> </div>
            <div class="Header-news">
                Recibe más Información
            </div>
            <ul class="Header-navNetwork">
                <li><a href="https://www.facebook.com/LUKERFOODINGREDIENTS" target="_blank"><span
                            class="icon-facebook"> </span></a></li>
                <li><a href="https://twitter.com/LUKEROFFICIAL" target="_blank"><span class="icon-twitter"> </span></a></li>
                <li><a href="https://www.youtube.com/channel/UCY_NfrnYxNHFP0KD0EKA8Gg" target="_blank"><span
                            class="icon-play3"> </span></a></li>
                <li><a href="https://instagram.com/lukerofficial/" target="_blank"><span class="icon-instagram"> </span></a>
                </li>
                <li><a href="https://www.linkedin.com/company/casaluker-food-ingredients?trk=company_name"
                       target="_blank"><span class="icon-linkedin2"> </span></a></li>
            </ul>
        </div>
    </div>

    <h1 class="Header-title"><?php the_title(); ?></h1>

    <div class="More" id="down">
        <a href="#">
            <span class="More-view">VER +</span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                 y="0px" viewBox="0 0 842 595" enable-background="new 0 0 842 595">
                <defs>
                    <filter id="_1442358581349_0_" x="-20%" y="-20%" width="200%" height="200%" type="Shadow"
                            shadowOffsetX="0" shadowOffsetY="10" shadowBlur="10" shadowColor="rgba(0,0,0,1)">
                        <feOffset result="offOut" in="SourceGraphic" dx="0" dy="5"/>
                        <feColorMatrix result="matrixOut" in="offOut" type="matrix"
                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                        <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="2"/>
                        <feBlend in="SourceGraphic" in2="blurOut" mode="normal"/>
                    </filter>
                </defs>
                <g type="LAYER" name="workspace" id="workspace" locked="true"/>
                <g type="LAYER" name="Layer 01" id="Layer 01">
                    <path transform="matrix(1 0 0 1 -4.1176470588249 24.969972282106497)" width="834.8529411764702"
                          height="219.26470588235298" stroke-width="0.6096947996260913" stroke-miterlimit="3"
                          stroke="#000000" stroke-opacity="0" fill="#FFFFFF"
                          d="M3.5735294117648095,0.7653218355405045 L420.485294117647,220.03002771789346 L838.4264705882349,1.5306436710809805 L3.5735294117647527,0.7653218355404618 "
                          filter="url(#_1442358581349_0_)"/>
                </g>
            </svg>
        </a>
    </div>

</header>
