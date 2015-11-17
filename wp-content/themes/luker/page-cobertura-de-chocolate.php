<?php get_header(); ?>
    <main class="Main Products ">
        <?php include TEMPLATEPATH . '/inc/Products.php' ?>

        <section>
            <article class="LukerCacao-article Cobertura">
                <figure class="Cobertura-figure"><img
                        src="<?php bloginfo('template_url') ?>/assets/images/productos/coberturas-sabor-a-chocolate.png"
                        alt="">
                </figure>
                <h2> <?php _e('COBERTURA SABOR A CHOCOLATE','luker'); ?></h2>

                <p>
                    <?php _e('Las Coberturas Sabor a Chocolate CasaLuker son producidas con ingredientes de la mejor calidad. Este
                    compound es ideal para cubrir o decorar hojaldres, tortas, galletas o panes; preparar rellenos,
                    brillos y ganache, fabricar decoraciones, bombones y huevos de chocolate. Son fáciles de usar porque
                    no requieren atemperado. <br>
                    Elabore sus recetas de forma rápida y fácil.','luker'); ?>
                </p>
            </article>
            <article>
                <figure><img
                        src="<?php bloginfo('template_url') ?>/assets/images/productos/empaque-sabor-a-chocolate.png"
                        alt="">
                </figure>
                <span class="Cobertura-span"><?php _e('No requieren atemperado.','luker'); ?> <br>

                    <?php _e('DARK, MILK AND WHITE COMPOUND.<br>

*Este producto es vendido únicamente en Colombia. Si está interesado por favor contactarse con nuestro grupo de ventas.','luker'); ?>
                </span>

            </article>
        </section>
    </main>
<?php get_footer(); ?>