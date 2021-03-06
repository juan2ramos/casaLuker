<?php

$url = array(
    "en-US" => 'product',
    "es-CO" => 'productos',
    "de-DE" => 'produkte',
    "fr-FR" => 'produits',
    "it-IT" => 'prodotto',
    "sk-SK" => 'produckty',
    "ru-RU" => 'product'
);
$currentlang = get_bloginfo('language');
?>
<ul class="Product">
    <li>
        <a href="<?php bloginfo('url'); echo '/'.$url[$currentlang] ?>/luker-1906">
            <img src="<?php bloginfo('template_url') ?>/assets/images/productos/luker-1906.png" alt="">
            <span><?php _e('Luker 1906, Single Origin Chocolates', 'luker'); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php bloginfo('url'); echo '/'.$url[$currentlang] ?>/luker-cacao">
            <img src="<?php bloginfo('template_url') ?>/assets/images/productos/luker-cacao.png" alt="">
            <span><?php _e('Luker Cacao, Fino de Aroma Blends', 'luker'); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php bloginfo('url'); echo '/'.$url[$currentlang] ?>/luker-maracas">
            <img src="<?php bloginfo('template_url') ?>/assets/images/productos/luker-maracas.png" alt="">
            <span><?php _e('Chocolate Dragees', 'luker'); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php bloginfo('url'); echo '/'.$url[$currentlang] ?>/luker-derivados">
            <img src="<?php bloginfo('template_url') ?>/assets/images/productos/luker.png" alt="">
            <span><?php _e('Cocoa derivatives', 'luker'); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php bloginfo('url'); echo '/'.$url[$currentlang] ?>/cobertura-de-chocolate">
            <img src="<?php bloginfo('template_url') ?>/assets/images/productos/coberturas-sabor-a-chocolate.png"
                 alt="">
            <span><?php _e('Compound', 'luker'); ?></span>
        </a>
    </li>
</ul>