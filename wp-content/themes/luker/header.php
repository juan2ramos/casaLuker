<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title('', true); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo esc_url($favicon); ?>">
    <link rel="apple-touch-icon" href="<?php echo esc_url($appletouch_s); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url($appletouch_m); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url($appletouch_l); ?>">

    <?php
    if( isset($uncommons['opt-adv-custom-head']) ){
        echo un_sanitize( $uncommons['opt-adv-custom-head'], true );
    } ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- PRELOADER -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<h1 class="mncrm">Luker</h1>
<div class="wrapper">


    <!-- NAVIGATION -->
    <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top">

        <div class="container">

            <div class="navbar-header">
                <h1 class="entrevin resp-">
                    <a href="<?php echo get_home_url(); ?>">
                        Entre<span></span>viñetas
                    </a>
                </h1>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">

                <?php
                if( is_page_template( 'page-vc.php' ) && redux_post_meta( UN, get_the_ID(), 'page_vc_onepage' ) == '1' ){
                    // Onepage Menu
                    echo '
					<div id="un-onepage-menu" class="menu-main-container">
						<ul id="main-menu" class="nav navbar-nav">				
						</ul>
					</div>';
                }else{
                    // Main Menu
                  //  un_main_menu();
                }
                ?>

            </div>

        </div>
        <div class="container">
            <!-- LOGO -->
            <h1 class="vin-logo">
                <a href="<?php echo get_home_url(); ?>">
                    Entreviñetas
                </a>
            </h1>
        </div>

    </nav>
    <!-- /NAVIGATION -->