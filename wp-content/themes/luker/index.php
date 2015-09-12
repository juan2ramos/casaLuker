<?php
/*
Description: The Header
Theme: Luker
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Casa Luker<?php wp_title(' | '); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php  bloginfo('template_url')?>/assets/images/favicon.ico">

    <!---- TYPEKIT -- -->
    <script type="text/javascript" src="http://use.typekit.com/uuf1qmf.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <link rel="stylesheet" href="<?php  bloginfo('template_url')?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php  bloginfo('template_url')?>/assets/css/style.css">



    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- PRELOADER -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- /PRELOADER -->


asdasd
<?php wp_widget ?>
<!-- WRAPPER -->
<?php include TEMPLATEPATH . '/inc/NavHeader.php' ?>
<?php include TEMPLATEPATH . '/inc/NavFooter.php' ?>
<?php wp_footer(); ?>

<?php dynamic_sidebar( 'sidebar-footer' ); ?>

</body>
</html>