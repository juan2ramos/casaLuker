<footer class="Footer">
    <button class="Footer-back"><span></span>

        <p>VOLVER AL MENÚ</p></button>
    <div class="Footer-wrapper">
        <figure class="Footer-logo">
            <img src="<?php bloginfo('template_url') ?>/assets/images/logo-casaluker-footer.png" alt="Logo casa luker ">
        </figure>
        <div class="Footer-nav">
            <?php wp_nav_menu(array('theme_location' => 'menuHeader', 'container' => 'nav')) ?>
        </div>
        <div class="Footer-info">
            <div class="Footer-infoColombia">
                <ul>
                    <li>CasaLuker Colombia</li>
                    <li>Calle 13 No 68-98</li>
                    <li>Bogotá, COLOMBIA</li>
                    <li><a href="mailto:lukercacao@casaluker.com.co">lukercacao@casaluker.com.co</a></li>
                    <li><a href="+5714473700">Teléfono: +57 (1) 4473700</a></li>
                </ul>
            </div>
            <div class="Footer-infoEurope">
                <ul>
                    <li>CasaLuker Europe</li>
                    <li>Kortrijksesteenweg 1132</li>
                    <li>9051 Sint-Denijs-Westrem,</li>
                    <li>BELGIUM</li>
                    <li><a href="mailto:casalukereu@casaluker.com.co">casalukereu@casaluker.com.co</a></li>
                    <li><a href="tel:32092450460">Teléfono: + 32 (0) 9 2450460</a></li>

                </ul>
            </div>
        </div>
    </div>

</footer>
<?php include TEMPLATEPATH . '/inc/BarFooter.php' ?>
<?php wp_footer(); ?>

</body>
</html>
