<?php get_header(); ?>
<main class="Main a-su-medida">
    <section>
        <article>
            <h2> INNOVACIÓN A SU MEDIDA</h2>

            <p>
                En el centro de Investigación y Desarrollo CasaLuker desarrollamos productos a la medida en cooperación
                con nuestros clientes bajo estándares internacionales.
            </p>

            <p>
                Productos a la medida y marcas privadas:
                <a href="mailto:lukercacao@casaluker.com.co">lukercacao@casaluker.com.co</a>
            </p>

            <h2 class="top"> CÓMO CATAR MASA DE CACAO</h2>

            <p>
                La Cata de masa de Cacao es una práctica profesional que se hace para determinar los atributos del aroma
                y
                el sabor en una muestra de Cacao específica.
                El proceso consiste en olfatear y saborear la muestra para medir el nivel de sabor a cacao, la acidez,
                la
                astringencia y el nivel amargo, frutal, floral y de nuez, entre otras características.
            </p>

            <p>
                El proceso:
            </p>

            <p>
                - Tome la muestra y olfatéela para percibir sus aromas mientras remueve el contenido con una cuchara ó
                espátula.
                - Tome una pequeña muestra de masa y llévelo a la boca buscando una dispersión uniforme sobre la lengua.
                - Mantenga la muestra en su boca durante 15 o 20 segundos, aireando un poco con bocanadas de aire.
                - Los atributos son evidentes durante este tiempo, escriba sus percepciones con la ayuda de la nariz del
                cacao CasaLuker.
            </p>

            <p>
                Nota: Es recomendado realizar un enjuague con agua entre muestras.
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
