;
(function (window) {

    'use strict';

    var bodyEl = document.body,
        docElem = window.document.documentElement,
        win = {width: window.innerWidth, height: window.innerHeight},
        body = document.querySelector('body'),
        templateUrl = body.getAttribute('data-template'),
        imagesHome = document.querySelectorAll('.NavHome-ul img');


    function init() {
        initEvents();
    }

    // event binding
    function initEvents() {

        $('#dropdown').on('change', function(){

            var valueSelect = $(this).val();
            $('.Contact-locationMap div').css('display','none');
            $('.Contact-map div').css('display','none');

            $('.'+ valueSelect).css('display','block');
            $('#'+ valueSelect).css('display','block');
            if (valueSelect == 'colombia' ){
                $('#dropdownCol').css('display','block');
            }else{
                $('#dropdownCol').css('display','none');
            }

        });
        $('#dropdownCol').on('change', function(){

            var valueSelect = $(this).val();
            $('.Contact-locationMap div').css('display','none');
            $('.Contact-map div').css('display','none');

            $('.'+ valueSelect).css('display','block');
            $('#colombia').css('display','block');

        });

        $('.More, .Footer-back').on('click', function(e){
            e.preventDefault();
            var target= $(this).get(0).id == 'down' ? $('.Main') : $('body');
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
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