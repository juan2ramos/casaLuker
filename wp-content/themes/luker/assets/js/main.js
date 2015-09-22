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
        showImagesHome();
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