<?php get_header(); ?>
<main class="Main LukerWay">
    <nav class="LukerWay-nav">
        <div class="menu">
            <a href="#" >MENU<span>◄</span></a>
        </div>
        <ul>
            <li><a href="#" data-target="LukerWay-cacao">NUESTRAS CREENCIAS</a></li>
            <li><a href="#" data-target="LukerWay-social">COMPROMISO SOCIAL</a></li>
            <li><a href="#" data-target="LukerWay-business">PROYECTOS EMPRESARIALES</a></li>
            <li><a href="#" data-target="LukerWay-scientific">ENFOQUE CIENTÍFICO</a></li>
        </ul>
    </nav>
    <section class="LukerWay-header">
        <div class="LukerWay-headerContent">
            <article>
                <h2>¿QUÉ ES <br/> THE LUKER WAY?</h2>

                <p>
                    Es la conexión que tenemos con nuestros socios; es nuestra relación con los agricultores (nuestros
                    proveedores), el medio ambiente, nuestros empleados, los clientes y la sociedad. Creemos en
                    compartir
                    oportunidades, conocimiento, entrenamiento y tecnología, y trabajamos juntos para producir el mejor
                    Cacao Fino de Aroma.
                </p>
            </article>
            <ul>
                <li><a href="#" data-target="LukerWay-cacao">NUESTRAS CREENCIAS</a></li>
                <li><a href="#" data-target="LukerWay-social">COMPROMISO SOCIAL</a></li>
                <li><a href="#" data-target="LukerWay-business">PROYECTOS EMPRESARIALES</a></li>
                <li><a href="#" data-target="LukerWay-scientific">ENFOQUE CIENTÍFICO</a></li>
            </ul>
        </div>
        <div class="LukerWay-bar"><span style="display: none" class="LukerWay-barFirst"></span><span data-target="LukerWay-cacao" class="LukerWay-barLast"></span> </div>
    </section>
    <section class="LukerWay-cacao">
        <div class="LukerWay-bar"><span data-target="LukerWay-header" class="LukerWay-barFirst"></span><span data-target="LukerWay-term" class="LukerWay-barLast"></span> </div>
    </section>
    <section class="LukerWay-term">
        <div class="LukerWay-bar"><span data-target="LukerWay-cacao" class="LukerWay-barFirst"></span><span  data-target="LukerWay-social"  class="LukerWay-barLast"></span> </div>
    </section>
    <section class="LukerWay-social">
        <div class="LukerWay-bar"><span data-target="LukerWay-term" class="LukerWay-barFirst"></span><span data-target="LukerWay-business" class="LukerWay-barLast"></span> </div>
    </section>
    <section class="LukerWay-business">
        <div id="owl-demo" class="owl-carousel">
            <div><img src="<?php bloginfo('template_url') ?>/assets/images/guacamayas-bg-03.jpg"></div>
            <div><img src="<?php bloginfo('template_url') ?>/assets/images/guacamayas-bg-02.jpg"></div>
            <div><img src="<?php bloginfo('template_url') ?>/assets/images/guacamayas-bg-01.jpg"></div>
            <div><img src="<?php bloginfo('template_url') ?>/assets/images/necocli-bg-05.jpg"></div>
            <div><img src="<?php bloginfo('template_url') ?>/assets/images/necocli-bg-03.jpg"></div>
            <div><img src="<?php bloginfo('template_url') ?>/assets/images/necocli-bg-02.jpg"></div>
            <div><img src="<?php bloginfo('template_url') ?>/assets/images/img-07.jpg"></div>
        </div>
        <div class="LukerWay-bar"><span data-target="LukerWay-social" class="LukerWay-barFirst"></span><span data-target="LukerWay-scientific" class="LukerWay-barLast"></span> </div>
    </section>
    <section class="LukerWay-scientific">
        <article class="LukerWay-scientificContent">
            <div class="middle">

                <h2>ENFOQUE CIENTÍFICO</h2>

                <p>
                    Durante los últimos 10 años, CasaLuker ha estado trabajando con Cenicafé en la caracterización y
                    profundización en el conocimiento del cacao, analizando y comparando diferentes especies de granos
                    de
                    cacao
                    de todo el mundo.

                    <span>Más de</span>
                    <span> <b>2370</b> muestras</span>
                    <span>procesadas</span>
                    <span>representando</span>
                    <span><b>327060</b></span>
                    <span>horas de trabajo</span>
                </p>
            </div>
        </article>
        <div class="LukerWay-bar">NOTICIAS<span  data-target="LukerWay-business" class="LukerWay-barFirst"></span><span  data-target="socialNetwork" class="LukerWay-barLast"></span> </div>
    </section>
    <section class="socialNetwork">
        <ul>
            <li><h3>TWEETS</h3></li>
            <li><h3>FACEBOOK</h3></li>
            <li><h3>YOUTUBE</h3></li>
        </ul>
    </section>


</main>
<?php wp_enqueue_style('luker-way', get_template_directory_uri() . '/assets/css/owl.carousel.css'); ?>
<?php wp_enqueue_script('luker-way', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('luker-way1', get_template_directory_uri() . '/assets/js/lukerWay.js', array('jquery'), 1, false); ?>
<?php get_footer(); ?>
