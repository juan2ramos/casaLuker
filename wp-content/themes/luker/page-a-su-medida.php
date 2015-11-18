<?php get_header(); ?>
<main class="Main a-su-medida">
    <section>
        <article>
            <h2><?php _e('TAILOR MADE INNOVATION','luker'); ?></h2>

            <p>
                <?php _e('In the CasaLuker Research and Development Centre we develop tailor made products under international standards.','luker'); ?>
            </p>

            <p>
                <?php _e('Tailor made products and private brands: <a href="mailto:lukercacao@casaluker.com.co">lukercacao@casaluker.com.co</a>','luker'); ?>
            </p>

            <h2 class="top"><?php _e('COCOA MASS TASTING','luker'); ?></h2>

            <p>
                <?php _e('Cocoa tasting is undertaken by professionals to determine the properties of aroma and flavour in a particular cocoa sample.
                 The process consists in smelling and tasting the sample in order to measure the levels of cocoa flavour, the acidity, astringency and the level of bitter, fruit, floral and nutty notes, among other properties.','luker'); ?>
            </p>

            <p>
                <?php _e('How it is done:','luker'); ?>
            </p>

            <p>
                <?php _e('- Take the sample and smell it while you stir the content with a tea-spoon or spatula, in order to perceive its variety of aromas.
- Take a small sample of the mass to your mouth and disperse it uniformly over your tongue.
- Hold the sample in your mouth for 15 - 20 seconds, taking in small amounts of air at the same time.
- The attributes become evident while doing this. Record your perceptions using the CasaLuker nariz del cacao (Cocoas nose) as an aid.','luker'); ?>
            </p>

            <p>
                <?php _e('Note: You must clean your palate with water between samples.','luker'); ?>
            </p>
        </article>
        <article>
            <div>
                <iframe src="https://www.youtube.com/embed/1oaHPNy3gVI" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="cocoa-nose">
                <div>
                    <i class="Nose" id="NosePrev">►</i>
                    <h3>NARIZ DEL CACAO</h3>
                    <span>PANEL DE CAPACITACIÓN</span>
                    <i class="Nose" id="NoseNext">►</i>
                </div>

                <div id="Nose">
                    <span class="show" data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba( 24,120,171,.7) 51%)">
                        <h3>QUÍMICO MEDICINAL</h3>
                        <ul>
                            <li>Amargo</li>
                            <li>Cuero</li>
                            <li>Metálico</li>
                            <li>Plástico</li>
                            <li>Caucho</li>
                            <li>Gasolina</li>
                        </ul>
                    </span>

                    <span data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba(73, 40, 8, 0.7) 51%)">
                        <h3>TERROSO</h3>
                        <ul>
                            <li>Mohoso</li>
                            <li>Cuero</li>
                            <li>Maderoso</li>
                            <li>Polvo</li>
                            <li>Levadura</li>
                            <li>Hongo</li>
                            <li>Herbal</li>
                            <li>Musgo</li>
                            <li>Heno</li>
                            <li>Pasto Fresco</li>

                        </ul>
                    </span>

                    <span data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba(102, 28, 23, 0.7) 51%)">
                        <h3>TOSTADO</h3>
                        <ul>
                            <li>Café</li>
                            <li>Té</li>
                            <li>Nuez</li>
                            <li>Cacao</li>
                            <li>Ahumado</li>
                            <li>Jamonoso</li>
                            <li>Caramelo</li>
                        </ul>
                    </span>

                    <span  data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba(122, 89, 10, 0.7) 51%)">
                        <h3>AROMÁTICO</h3>
                        <ul>
                            <li>Floral</li>
                            <li>Picante</li>
                            <li>Vainilla</li>
                            <li>Vainillina</li>
                        </ul>
                    </span>

                    <span data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba(24,120,171,.7) 51%)">
                        <h3>CACAO</h3>
                        <ul>
                            <li>Fuerte</li>
                            <li>Ácido</li>
                            <li>Oscuro</li>
                            <li>Suave</li>
                            <li>Astringente</li>
                        </ul>
                    </span>
                    <span data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba(69, 27, 23, 0.7) 51%)">
                        <h3>DULZURA</h3>
                        <ul>
                            <li>Azúcar Morena</li>
                            <li>Malta </li>
                            <li>Miel</li>
                            <li>Caramelo</li>
                            <li>Melosa</li>
                        </ul>
                    </span>
                    <span data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba(95, 60, 17, 0.7) 51%)">
                        <h3>LACTOSA</h3>
                        <ul>
                            <li>Lechoso</li>
                            <li>Mantequilloso </li>
                            <li>Cremoso</li>
                            <li>Carameloso</li>
                            <li>Cocinado</li>
                        </ul>
                    </span>
                    <span data-color="linear-gradient(to right,rgba(0,0,0,0) 50%,rgba(56, 46, 11, 0.7) 51%)">
                        <h3>FRUTO VINOSO</h3>
                        <ul>
                            <li>Árbol Frutal</li>
                            <li>Cítricos </li>
                            <li>Frutos Tropicales</li>
                            <li>Frutos Secos</li>
                            <li>Alicorado</li>
                        </ul>
                    </span>
                </div>

                <div>

                </div>
            </div>
        </article>
    </section>
</main>
<?php wp_enqueue_script('mixScript', get_template_directory_uri() . '/assets/js/medida.js', array('jquery'), 1, false); ?>
<?php get_footer(); ?>
