;
(function (window) {

    'use strict';

    var bodyEl = document.body,
        docElem = window.document.documentElement,
        win = {width: window.innerWidth, height: window.innerHeight},
        body = document.querySelector('body'),
        templateUrl = body.getAttribute('data-template'),
        imagesHome = document.querySelectorAll('.NavHome-ul img'),
        storage;




    function init() {
        initEvents();
    }

    // event binding
    function initEvents() {


        if (localStorage.getItem("news") === null) {

            localStorage.news = 'true';
            $('.popUpNewsLetter').addClass('show');

        }


        $('.Header-news').on('click', function () {
            $('.formNewsletter').toggleClass('show');
        });
        $('.popUpNewsLetter button').on('click', function () {
            $('.popUpNewsLetter').hide('slow');
        });
        $('#dropdown').on('change', function () {

            var valueSelect = $(this).val();
            $('.Contact-locationMap div').css('display', 'none');
            $('.Contact-map div').css('display', 'none');

            $('.' + valueSelect).css('display', 'block');
            $('#' + valueSelect).css('display', 'block');
            if (valueSelect == 'colombia') {
                $('#dropdownCol').css('display', 'block');
            } else {
                $('#dropdownCol').css('display', 'none');
            }

        });
        $('#dropdownCol').on('change', function () {

            var valueSelect = $(this).val();
            $('.Contact-locationMap div').css('display', 'none');
            $('.Contact-map div').css('display', 'none');

            $('.' + valueSelect).css('display', 'block');
            $('#colombia').css('display', 'block');

        });

        $('.More, .Footer-back').on('click', function (e) {
            e.preventDefault();
            var target = $(this).get(0).id == 'down' ? $('.Main') : $('body');
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        });

        $('.ButtonNav').on('click', function (e) {
            $('body').toggleClass('open');
        });
        $('.Close').on('click', function (e) {
            $('body').removeClass('open')
        });
        $(window).on('resize', function () {
            var win = $(this);
            if (win.height() >= 820) {
                $('body').removeClass('open')
            }

        });

       /* $('.mohoNews').on('click', function (e) {
            $(this).find('span').first().toggleClass('rotate');
            $('.content-news div').remove('heightDiv');
            $(this).siblings('.content-news').find('div').toggleClass('heightDiv');
            $(this).siblings('.content-news').find('.lessNews').toggleClass('show');
        });
        $('.lessNews').on('click', function (e) {
            $(this).parents('article').find('.moreNews span').first().toggleClass('rotate');
            $('.content-news div').remove('heightDiv');
            $(this).parents('.content-news').find('div').toggleClass('heightDiv');
            $(this).parents('.content-news').find('.lessNews').toggleClass('show');
        });*/

        $('.TabsMenu li').on('click', function (e) {

            var index = $(".TabsMenu li").index(this);
            $('.TabsMenu li').removeClass('active');
            $(this).addClass('active');
            $('.Tabs li').hide(500);
            $('.Tabs li').eq(index).show('slow');

        });


        //  showImagesHome();
        /*
         zoomCtrl.addEventListener('click', function() {
         openItem(items[current]);
         });

         // window resize
         window.addEventListener('resize', throttle(function(ev) {

         win = {width: window.innerWidth, height: window.innerHeight};

         items.forEach(function(item, pos) {
         if( pos === current ) return;
         var el = item.querySelector('.slide__mover');
         dynamics.css(el, { translateX: el.offsetWidth });
         });
         }, 10));
         */
    }

    init();

})(window);
