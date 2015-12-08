<?php get_header(); ?>
    <main class="Main Products LukerCacao">

        <section>
            <article class="LukerCacao-article">

                <h2><?php _e('GRANJA LUKER', 'luker'); ?></h2>
                <figure><img src="<?php bloginfo('template_url') ?>/assets/images/granja-luker.png" alt="">
                </figure>
                <p>
                    <?php _e('In 1962, CasaLuker created Granja Luker, one of the few research centres for cocoa in the world. The staff at the centre work to modernise production technology and conservation techniques for Cacao Fino de Aroma, to ensure benefits for the farmers who rely on the crop as their livelihood, and to guarantee the best quality for our clients.', 'luker'); ?>
                </p>
            </article>
            <article>
                <iframe style="margin: auto; max-width: 90%; display: block" width="560" height="315" src="https://www.youtube.com/embed/i9mntSLed7E" frameborder="0"
                        allowfullscreen></iframe>
                <article class="city" style="    width: 100%;">
                    <a class="test-popup-link" href="<?php bloginfo('template_url') ?>/assets/images/arbol.jpg">
                        <img style="max-width: 120px;" src="<?php bloginfo('template_url') ?>/assets/images/arbol.jpg" alt="">
                    </a>
                    <a class="test-popup-link" href="<?php bloginfo('template_url') ?>/assets/images/dr-a.jpg">
                        <img style="max-width: 120px;" src="<?php bloginfo('template_url') ?>/assets/images/dr-a.jpg" alt="">
                    </a>
                    <a class="test-popup-link"
                       href="<?php bloginfo('template_url') ?>/assets/images/desgranado1.jpg">
                        <img style="max-width: 120px;" src="<?php bloginfo('template_url') ?>/assets/images/desgranado1.jpg" alt="">
                    </a>
                    <a class="test-popup-link"
                       href="<?php bloginfo('template_url') ?>/assets/images/corte-de-mazorcas1.jpg">
                        <img style="max-width: 120px;" src="<?php bloginfo('template_url') ?>/assets/images/corte-de-mazorcas.jpg" alt="">
                    </a>
                    <a class="test-popup-link"
                       href="<?php bloginfo('template_url') ?>/assets/images/fermentacion.jpg">
                        <img style="max-width: 120px;" src="<?php bloginfo('template_url') ?>/assets/images/fermentacion.jpg" alt="">
                    </a>
                </article>

                <h2><?php _e('CASA LUKER TRAINING MODEL. BETTER COCOA AND PRODUCTIVITY: HIGHER INCOME FOR THE FARMERS', 'luker'); ?></h2>
                <p><?php _e('In the Luker Farm we develop and promote profitable cocoa models through our training courses. Our cocoa models ensures and increases the income of the farmer and have an impact on their life quality. Our agroforestry model, cocoa - banana - fruit - timber, and our training program for harvesting and post harvesting, guarantees the farmer’s incomes in the short and long-term family cocoa. Granja Luker was created with the objective of creating a center to promote the cocoa harvesting in the country among small producers. Today we educate more than 700 people annually.', 'luker'); ?></p>
                </article>
        </section>


    </main>
<?php wp_enqueue_style('style-name', 'http://dimsemenov-static.s3.amazonaws.com/dist/magnific-popup.css'); ?>
<?php wp_enqueue_script('dimsemenov', 'http://dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('mixScript', get_template_directory_uri() . '/assets/js/popUp.js', array('jquery'), 1, false); ?>
<?php get_footer(); ?>