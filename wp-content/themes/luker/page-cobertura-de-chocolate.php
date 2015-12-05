<?php get_header(); ?>
    <main class="Main Products ">
        <?php include TEMPLATEPATH . '/inc/Products.php' ?>

        <section class="beantobar">
            <div>
                <div class="content">
                    <h2><?php _e('CASALUKER 1906,<br> SINGLE ORIGIN CACAO BEANS', 'luker'); ?></h2>
                    <p><?php _e('Compartimos la creencia de que para lograr un excelente producto se debe tener completa trazabilidad desde el inicio, es por ello que para los exigentes productores bean to bar ofrecemos un cacao de calidad superior y sobretodo, un cacao con historia.', 'luker'); ?></p>
                    <div class="line"></div>
                    <h2><?php _e('ACERCA DEL PRODUCTO', 'luker'); ?></h2>
                    <p><?php _e('Cada región productora tiene diferentes características especiales de suelo y clima, lo cual se traduce en diferencias de sabor y aroma de cada uno de sus cacaos.', 'luker'); ?></p>
                    <p><?php _e('A este tipo de cacao le hacemos un seguimiento especial debido a las características y estándares que debe cumplir. Luego de que se recibe por parte de cada una de las asociaciones/regiones se le hace un proceso de clasificación y limpieza riguroso para eliminar granos defectuosos, polvo, metales, piedras y demás materiales extraños que pueda contener el cacao. Luego pasa a ser empacado.', 'luker'); ?></p>
                    <div class="center gray"><?php _e('Presentación', 'luker'); ?></div>
                    <div class="center white"><?php _e('Bolsa de 2,5 Kg', 'luker'); ?></div>
                    <img class="product" src="<?php bloginfo('template_url') ?>/assets/images/productos/empaque-sabor-a-chocolate.png" alt="" />
                </div>
                <div class="content">
                    <h2><?php _e('¿POR QUÉ SOMOS DIFERENTES?', 'luker'); ?></h2>
                    <p class="gray"><?php _e('Más que direct trade – Luker Way', 'luker'); ?></p>
                    <p><?php _e('Trabajamos de la mano de 45 asociaciones de agricultores en Colombia y 2 asociaciones en Perú. Les aseguramos la compra de sus cosechas y los apoyamos con materiales para su trabajo y sus familias.', 'luker'); ?></p>
                    <p><?php _e('Capacitamos a cada uno de estos agricultores en la Granja Luker, nuestro centro de investigación de cacao. Asimismo les prestamos asesoría técnica en cada una de las regiones.', 'luker'); ?></p>
                    <div class="images">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/productos/empaque-sabor-a-chocolate.png" alt="" />
                        <img src="<?php bloginfo('template_url') ?>/assets/images/productos/empaque-sabor-a-chocolate.png" alt="" />
                        <img src="<?php bloginfo('template_url') ?>/assets/images/productos/empaque-sabor-a-chocolate.png" alt="" />
                    </div>
                    <p class="gray"><?php _e('Para el mejor cacao, el mejor precio', 'luker'); ?></p>
                    <p><?php _e('Pagamos a los agricultores un 20% adicional sobre el precio normal del cacao como reconocimiento al esfuerzo y trabajo que deben hacer para lograr las características que el exigente mercado bean to bar demanda.', 'luker'); ?></p>
                    <p class="gray"><?php _e('Cacao fino de aroma', 'luker'); ?></p>
                    <p><?php _e('Vamos más allá de un cacao de origen, ofrecemos a nuestros clientes cacao Fino de Aroma de 3 regiones Colombianas y 1 región Peruana con diferentes características sensoriales, excelentes niveles de fermentación y mínimos niveles de granos defectuosos.', 'luker'); ?></p>
                </div>

                <div class="clear"></div>
            </div>

            <div class="mapsection orange">
                <div class="content">
                    <?php echo file_get_contents('wp-content/themes/luker/assets/images/btb-map.svg'); ?>
                </div>
                <div class="content all-info">
                    <div id="tumaco" class="info">
                        <div class="intro">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/btb-tumaco.png" alt="" />
                            <h2><?php _e('TUMACO', 'luker'); ?></h2>
                        </div>
                        <ul class="icons">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-area.svg" alt="" />
                                <div class="label"><?php _e('Área', 'luker'); ?></div>
                                <div class="value"><?php _e('3.760 km²', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-altitud.svg" alt="" />
                                <div class="label"><?php _e('Altitud', 'luker'); ?></div>
                                <div class="value"><?php _e('Entre 0 y 150 m.s.n.m', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-clima.svg" alt="" />
                                <div class="label"><?php _e('Clima', 'luker'); ?></div>
                                <div class="value"><?php _e('Tropical', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-temperatura.svg" alt="" />
                                <div class="label"><?php _e('Temperatura', 'luker'); ?></div>
                                <div class="value"><?php _e('29°C', 'luker'); ?></div>
                            </li>
                        </ul>
                        <table>
                            <tr>
                                <td>
                                    <h3><?php _e('DESCRIPCIÓN', 'luker'); ?></h3>
                                    <p><?php _e('Ubicada cerca del océano pacífico, es una región con bosques tropicales donde se dan excelentes condiciones de temperatura y lluvia para el cultivo del mejor cacao.', 'luker'); ?></p>
                                </td>
                                <td>
                                    <h3><?php _e('CACAO', 'luker'); ?></h3>
                                    <p><?php _e('Aroma limpio definido a cacao, con notas tostadas y leve nuez, color café con tonos rojizos. Sabor a cacao limpio y definido. Baja acidez y astringencia, amargo medio alto limpio con nota leve a nuez. En general se destaca por su sabor robusto y definido a chocolate.', 'luker'); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="santander" class="info hide">
                        <div class="intro">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/btb-tumaco.png" alt="" />
                            <h2><?php _e('SANTANDER', 'luker'); ?></h2>
                        </div>
                        <ul class="icons">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-area.svg" alt="" />
                                <div class="label"><?php _e('Área', 'luker'); ?></div>
                                <div class="value"><?php _e('30.537 km²', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-altitud.svg" alt="" />
                                <div class="label"><?php _e('Altitud', 'luker'); ?></div>
                                <div class="value"><?php _e('Entre 300 y 1.200 m.s.n.m', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-clima.svg" alt="" />
                                <div class="label"><?php _e('Clima', 'luker'); ?></div>
                                <div class="value"><?php _e('Cálido', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-temperatura.svg" alt="" />
                                <div class="label"><?php _e('Temperatura', 'luker'); ?></div>
                                <div class="value"><?php _e('25°C', 'luker'); ?></div>
                            </li>
                        </ul>
                        <table>
                            <tr>
                                <td>
                                    <h3><?php _e('DESCRIPCIÓN', 'luker'); ?></h3>
                                    <p><?php _e('Es una región montañosa ubicada al norte de la cordillera central, tiene un clima templado seco que enriquece los aromas y sabores del cacao, el cual se cultiva desde la época indígena.', 'luker'); ?></p>
                                </td>
                                <td>
                                    <h3><?php _e('CACAO', 'luker'); ?></h3>
                                    <p><?php _e('Aroma tostado, limpio con notas a nuez. Color café claro, sabor a cacao medio alto con notas frutales, acidez suave, astringencia baja y amargo medio.', 'luker'); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="arauca" class="info hide">
                        <div class="intro">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/btb-tumaco.png" alt="" />
                            <h2><?php _e('ARAUCA', 'luker'); ?></h2>
                        </div>
                        <ul class="icons">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-area.svg" alt="" />
                                <div class="label"><?php _e('Área', 'luker'); ?></div>
                                <div class="value"><?php _e('23.818 km²', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-altitud.svg" alt="" />
                                <div class="label"><?php _e('Altitud', 'luker'); ?></div>
                                <div class="value"><?php _e('Entre 150 y 200 m.s.n.m.', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-clima.svg" alt="" />
                                <div class="label"><?php _e('Clima', 'luker'); ?></div>
                                <div class="value"><?php _e('Cálido', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-temperatura.svg" alt="" />
                                <div class="label"><?php _e('Temperatura', 'luker'); ?></div>
                                <div class="value"><?php _e('29°C', 'luker'); ?></div>
                            </li>
                        </ul>
                        <table>
                            <tr>
                                <td>
                                    <h3><?php _e('DESCRIPCIÓN', 'luker'); ?></h3>
                                    <p><?php _e('Es una tierra fértil ubicada cerca de la frontera con Venezuela, se caracteriza por tener grandes sabanas ricas en biodiversidad y ríos como el Arauca, por medio del cual se transporta la mayor parte de la población y del cacao que producen.', 'luker'); ?></p>
                                </td>
                                <td>
                                    <h3><?php _e('CACAO', 'luker'); ?></h3>
                                    <p><?php _e('Aroma dulce y tostado. Sabor a cacao medio, acidez pronunciada con notas dulces y frutales al final que complementan su sabor; amargo y astringencia bajos. En general presenta color claro y una alta fluidez.', 'luker'); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="sanmartin" class="info hide">
                        <div class="intro">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/btb-tumaco.png" alt="" />
                            <h2><?php _e('SAN MARTIN', 'luker'); ?></h2>
                        </div>
                        <ul class="icons">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-area.svg" alt="" />
                                <div class="label"><?php _e('Área', 'luker'); ?></div>
                                <div class="value"><?php _e('51.253 km²', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-altitud.svg" alt="" />
                                <div class="label"><?php _e('Altitud', 'luker'); ?></div>
                                <div class="value"><?php _e('Entre 300 y 800 m.s.n.m.', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-clima.svg" alt="" />
                                <div class="label"><?php _e('Clima', 'luker'); ?></div>
                                <div class="value"><?php _e('Cálido', 'luker'); ?></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/assets/images/btb-icon-temperatura.svg" alt="" />
                                <div class="label"><?php _e('Temperatura', 'luker'); ?></div>
                                <div class="value"><?php _e('28°C', 'luker'); ?></div>
                            </li>
                        </ul>
                        <table>
                            <tr>
                                <td>
                                    <h3><?php _e('DESCRIPCIÓN', 'luker'); ?></h3>
                                    <p><?php _e('La cálida región de San Martín se ubica en medio de la selva de Pomabamba la cual se caracteriza por tener bosques húmedos tropicales y mucha diversidad. Muchas familias de la región se dedican al cultivo de cacao, el cual en su mayoría es exportado.', 'luker'); ?></p>
                                </td>
                                <td>
                                    <h3><?php _e('CACAO', 'luker'); ?></h3>
                                    <p><?php _e('Color claro y alta fluidez. Sabor a cacao delicado, con acidez pronunciada, notas dulces y astringencia baja.', 'luker'); ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </section>

        <!--
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
-->

    </main>
<?php wp_enqueue_script('BeanToBar', get_template_directory_uri() . '/assets/js/beantobar.js', array('jquery'), 1, false); ?>
<?php get_footer(); ?>
