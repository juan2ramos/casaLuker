<footer class="Footer">
    <button class="Footer-back"><span></span>

        <p><?php _e('BACK TO MENU', 'luker'); ?></p></button>
    <div class="Footer-wrapper">
        <figure class="Footer-logo">
            <img
                src="<?php bloginfo('template_url') ?>/assets/images/<?php echo get_bloginfo('language') ?>/logo-casaluker-footer.png"
                alt="Logo casa luker ">
        </figure>
        <div class="Footer-nav">
            <?php wp_nav_menu(array('theme_location' => 'menuHeader', 'container' => 'nav')) ?>
        </div>
        <div class="Footer-info">
            <div class="Footer-infoColombia">
                <ul>
                    <li><?php _e('CasaLuker Colombia','luker'); ?></li>
                    <li><?php _e('Calle 13 No 68-98','luker'); ?></li>
                    <li><?php _e('Bogotá, COLOMBIA','luker'); ?></li>
                    <li><a href="mailto:lukercacao@casaluker.com.co">lukercacao@casaluker.com.co</a></li>
                    <li><a href="+5714473700"><?php _e('Teléfono: +57 (1) 4473700','luker'); ?></a></li>
                </ul>
            </div>
            <div class="Footer-infoEurope">
                <ul>
                    <li><?php _e('CasaLuker Europe','luker'); ?></li>
                    <li>Kortrijksesteenweg 1132</li>
                    <li>9051 Sint-Denijs-Westrem,</li>
                    <li><?php _e('BELGIUM','luker'); ?></li>
                    <li><a href="mailto:casalukereu@casaluker.com.co">casalukereu@casaluker.com.co</a></li>
                    <li><a href="tel:32092450460"><?php _e('Teléfono: + 32 (0) 9 2450460','luker'); ?></a></li>

                </ul>
            </div>
        </div>
    </div>

</footer>

<div class="popUpNewsLetter">
    <div class="popUpNewsLetterContainer">
        <p>
            <?php _e('','luker'); ?> Tome un momento para suscribirse a nuestros Newsletter y obtenga más información sobre cacao, productos,
            recetas, producción y compromiso social
        </p>
        <button>CERRAR</button>
    </div>
</div>

<?php include TEMPLATEPATH . '/inc/BarFooter.php' ?>
<?php wp_enqueue_style('styleLoad', get_template_directory_uri() . '/assets/css/pace-theme-center-atom.tmpl.css'); ?>
<?php wp_enqueue_script('load', get_template_directory_uri() . '/assets/js/pace.min.js', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('loadInit', get_template_directory_uri() . '/assets/js/load.js', array('jquery'), 1, false); ?>
<div id="preloader">
    <div class="text"></div>
</div>
<?php wp_footer(); ?>

</body>
</html>
