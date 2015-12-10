<?php
/*
Description: The Header
Theme: Luker
*/
$currentlang = get_bloginfo('language');
$arrayTitleNews = false;
if(get_post()->post_type == "registernews"){
    $arrayTitleNews = array(
        'es-CO' => 'NOTICIAS',
        'de-DE' => 'AKTUELL',
        'en-US' => 'NEWS',
        'fr-FR' => 'NOUVELLES',
        'it-IT' => 'NOTIZIE',
        'ru-RU' => 'NEWS',
        'sk-SK' => 'NOVINKY',
    );
}
$titleNews = ($arrayTitleNews)?$arrayTitleNews[$currentlang]:get_the_title();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php the_title(); ?> - Casa Luker</title>

    <meta name="description" content=""/>

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

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">
<?php $upload_dir = wp_upload_dir(); ?>
<?php $image = (get_post()->post_type == "registernews")?$upload_dir['baseurl'].'/2015/09/bg-top7.jpg':wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')['0']  ; ?>

<header class="Header" style="
    background-image: url(<?php echo $image ?>)
    ">
    <div class="ButtonNav">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <figure class="Header-logo-mobile">



        <a href="<?php bloginfo('url') ?>"><img
                src="<?php bloginfo('template_url') ?>/assets/images/logo-casa-luker.png" alt="Logo Casa Luker"></a>
    </figure>
    <div class="Header-wrapper">


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
                <li><a href="https://twitter.com/LUKEROFFICIAL" target="_blank"><span class="icon-twitter"> </span></a>
                </li>
                <li><a href="https://www.youtube.com/channel/UCY_NfrnYxNHFP0KD0EKA8Gg" target="_blank"><span
                            class="icon-play3"> </span></a></li>
                <li><a href="https://instagram.com/lukerofficial/" target="_blank"><span class="icon-instagram"> </span></a>
                </li>
                <li><a href="https://www.linkedin.com/company/casaluker-food-ingredients?trk=company_name"
                       target="_blank"><span class="icon-linkedin2"> </span></a></li>
            </ul>
            <div class="Header-news">
                <?php _e('GET MORE INFO','luker'); ?>
            </div>

            <div class="formNewsletter">
                <form method="post" action="<?php bloginfo('url') ?>/?na=s" onsubmit="return newsletter_check(this)">
                    <input class="newsletter-firstname" required type="text" name="nn" size="30" placeholder="<?php _e('Name', 'luker'); ?>">
                    <input class="newsletter-lastname" type="text" name="ns" size="30" required placeholder="<?php _e('Last Name', 'luker'); ?>">
                    <input class="newsletter-email" type="email" name="ne" size="30" required
                           placeholder="<?php _e('E-mail', 'luker'); ?>">
                    <hr>
                    <h4><?php _e('Language', 'luker'); ?></h4>
                    <select class="newsletter-profile newsletter-profile-3" name="np3" required>
                        <option><?php _e('English', 'luker'); ?></option>
                        <option><?php _e('Spanish', 'luker'); ?></option>
                    </select>
                    <hr>
                    <h4><?php _e('Country', 'luker'); ?></h4>
                    <input class="newsletter-profile newsletter-profile-4" required type="text" size="30" name="np4"
                           placeholder="País"/>
                    <input class="newsletter-submit" type="submit" value="Subscribe"/>
                </form>
            </div>
        </div>
        <div class="Header-barMobile">
            <div class="Search"><?php dynamic_sidebar('widgetSearchFooter'); ?> </div>
            <div class="Header-news">
                <?php _e('GET MORE INFO','luker'); ?>
            </div>
            <ul class="Header-navNetwork">
                <li><a href="https://www.facebook.com/LUKERFOODINGREDIENTS" target="_blank"><span
                            class="icon-facebook"> </span></a></li>
                <li><a href="https://twitter.com/LUKEROFFICIAL" target="_blank"><span class="icon-twitter"> </span></a>
                </li>
                <li><a href="https://www.youtube.com/channel/UCY_NfrnYxNHFP0KD0EKA8Gg" target="_blank"><span
                            class="icon-play3"> </span></a></li>
                <li><a href="https://instagram.com/lukerofficial/" target="_blank"><span class="icon-instagram"> </span></a>
                </li>
                <li><a href="https://www.linkedin.com/company/casaluker-food-ingredients?trk=company_name"
                       target="_blank"><span class="icon-linkedin2"> </span></a></li>
            </ul>
        </div>
    </div>

    <h1 class="Header-title">

        <h1 style="font-size: 2rem;" class="Header-title">
            <?php _e('Thanks for subscribing, you will receive news from us soon.', 'luker'); ?>
        </h1>
    </h1>
</header>

<script type="text/javascript">
    //<![CDATA[
    if (typeof newsletter_check !== "function") {
        window.newsletter_check = function (f) {
            var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
            if (!re.test(f.elements["ne"].value)) {
                alert("The email is not correct");
                return false;
            }
            for (var i = 1; i < 20; i++) {
                if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
                    alert("");
                    return false;
                }
            }
            if (f.elements["ny"] && !f.elements["ny"].checked) {
                alert("You must accept the privacy statement");
                return false;
            }
            return true;
        }
    }
    //]]>
</script>







<?php get_footer(); ?>
