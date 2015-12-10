<?php
$currentLang = get_bloginfo('language');
$arrayTitleRecipes = array(
    'es-CO' => 'recetas',
    'de-DE' => 'rezepte',
    'en-US' => 'recipes',
    'fr-FR' => 'recettes',
    'it-IT' => 'ricette',
    'ru-RU' => 'recipes-ru',
    'sk-SK' => 'recepty',
);
$url = explode('/', get_bloginfo('url'));
array_pop($url);
$url = implode('/', $url);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php the_title(); ?> - Casa Luker</title>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico">

    <!---- TYPEKIT -- -->
    <script type="text/javascript" src="http://use.typekit.com/uuf1qmf.js"></script>
    <script type="text/javascript">try {
            Typekit.load();
        } catch (e) {
        }</script>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">
    <style>#level svg:nth-child(-n + <?php echo $content['level'] ?>  ) .st1 {
            fill: #fff
        }</style>

</head>
<body class="RecipeDetail-body">

<section class="RecipeDetail show">
    <header class="RecipeDetail-header" style="background-image: url(<?php bloginfo('url');echo $content['banner'] ?>);">
        <div class="RecipeDetail-headerContent">
            <div class="RecipeDetail-bar">
                <h2>TYPE OF CHOCOLATE <span id="imageCocoa"><img src="<?php echo $content['imageCocoa'] ?>"
                                                                 alt=""></span></h2>
                <span class="RecipeDetail-barClose">

                        <div class="pdf"><a href="<?php echo $url . '/' . get_post_meta(get_the_ID(), 'pdf')[0] ?>"
                                            target="_blank">pdf <span> ► </span></a></div>

                    <div class="gr">
                        gr <span>►</span>
                    </div>
                    <a href="<?php echo $arrayTitleRecipes[$currentLang]; ?>" class="CloseLink" ">
                         <svg version="1.1" id="closeX" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                             <g>
                                 <line class="st0" x1="57.7" y1="0.8" x2="0" y2="56.9"/>
                                 <line class="st0" x1="0" y1="0" x2="57.7" y2="57.7"/>
                             </g>
                         </svg>
                     </a>

                </span>
            </div>
        </div>
        <div class="RecipeDetailBarBottom">
            <ul>
                <li><p>CHEF <span id="chefName"><?php echo $content['chefName'] ?></span></p></li>
                <li><p>SERVINGS <span id="servings"><?php echo $content['servings'] ?></span></p></li>
                <li>
                    <p>DIFFICULTY LEVEL
                        <span id="level">
                            <svg version="1.1" class="cacaoSvg " xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="-749 388.4 486.1 641.9" style="enable-background:new -749 388.4 486.1 641.9;"
                                 xml:space="preserve">
                                <g>
                                    <path class="st1"
                                          d="M-287.7,403.7c0,0-516,3-442.5,611.3C-730.3,1015-183.6,1007.7-287.7,403.7z"/>
                                </g>
                            </svg>
                            <svg version="1.1" class="cacaoSvg " xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="-749 388.4 486.1 641.9" style="enable-background:new -749 388.4 486.1 641.9;"
                                 xml:space="preserve">
                                <g>
                                    <path class="st1"
                                          d="M-287.7,403.7c0,0-516,3-442.5,611.3C-730.3,1015-183.6,1007.7-287.7,403.7z"/>
                                </g>
                            </svg>
                            <svg version="1.1" class="cacaoSvg " xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="-749 388.4 486.1 641.9" style="enable-background:new -749 388.4 486.1 641.9;"
                                 xml:space="preserve">
                                <g>
                                    <path class="st1"
                                          d="M-287.7,403.7c0,0-516,3-442.5,611.3C-730.3,1015-183.6,1007.7-287.7,403.7z"/>
                                </g>
                            </svg>
                        </span>
                    </p>
                </li>
            </ul>
        </div>
    </header>
    <article id="RecipeDetail-content"><?php echo $content['content'] ?></article>
    <footer class="RecipeDetail-footer">
        <div class="RecipeDetailContainer-footer">
            <figure id="RecipeDetail-figure">

                <img src="<?php echo $content['chefImage'] ?>" alt="">
            </figure>
            <div class="RecipeDetail-chef">
                <div class="RecipeDetail-chefContent">
                    <h3><?php echo $content['chefName'] ?></h3>

                    <p><?php echo $content['chefDescription'] ?></p>
                </div>
            </div>
            <div class="suscribe">
                <div class="suscribe-content">
                   <span class="icon-facebook"></span>
                   <span class="icon-twitter"></span>
                </div>
            </div>
        </div>
    </footer>

</section>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js?ver=2.1.3'></script>
<script>
    var measure = true;
    $(document).on('keydown',function(e){
        if ( e.which == 27 ) {
            window.location.href = '<?php echo $url . '/' . $arrayTitleRecipes[$currentLang]; ?>';
        };
    });
    $('.gr').on('click', function () {

        $(this).html((measure)?'oz<span>►</span>':'gr<span>►</span>');
        var $liData = $('.ingredients li');
        $liData.each(function(i){
            var nm = $( this).find('.nm'),
                ms = $( this).find('.ms'),
                number =  nm.text();

            if(!isNaN(parseInt(number))){
                if(measure){
                    ms.text('oz')
                    number = number / 28.3495;

                    number = number.toFixed(3);
                }else{
                    number = number * 28.3495;
                    ms.text('g')
                    number = number.toFixed();
                }

                nm.text(number)

                console.log(number)
            }
        });

        measure = (measure)?false:true;
    })
</script>
</body>
</html>