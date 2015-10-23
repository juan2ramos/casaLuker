(function (window) {
    $('.LukerWay-bar span, .LukerWay-headerContent a, .LukerWay-nav ul a').on('click', function(){
        event.preventDefault();
        var target = $(this).data('target'),
            top = $("." + target).offset().top;

        $('html, body').animate({scrollTop: top+'px'}, 1000);
    });
    $('.menu').on('click', function(){
        event.preventDefault();
        $('.LukerWay-nav').toggleClass('show');
        $('.menu span').toggleClass('show');
        if ($(window).scrollTop() < $(window).height() ){

            $('html, body').animate({scrollTop: $(window).height()}, 500);
        }
    });
    $("#owl-demo").owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        singleItem : true,
        autoHeight : true,
        afterUpdate: function () {
            updateSize();
        },
        afterInit: function () {
            updateSize();
        }
    });
})(window);

$(window).scroll(function() {

    $('.menu span').removeClass('show');
    if ($(window).scrollTop() > $(window).height() ){
        console.log($(window).scrollTop() - $(window).height() )
        $('.LukerWay-nav').removeClass('show');

        $('.LukerWay-nav').stop().animate({'top':$(window).scrollTop() - $(window).height()}, '100', 'swing');
    }else{
        $('.LukerWay-nav').stop().animate({'top': 0 }, '100', 'swing');
    }

});
function updateSize() {
    var heightContent = parseInt($('.owl-item').height()),
        widthContent = parseInt($('.owl-item').width()),
        ratioContent = widthContent / heightContent;

    $(".owl-item").each(function () {
        var heightImg = parseInt($(this).find('img').height()),
            widthImg = parseInt($(this).find('img').width()),
            ratioImg = widthImg / heightImg;
        if ($(window).width() > 800) {
            if (ratioContent > ratioImg) {
                imgW = "100%";
                imgH = "auto";
            } else {
                imgW = "auto";
                imgH = "100vh";
            }
            $(this).find('img').css('width', imgW);
            $(this).find('img').css('height', imgH);
            $(this).find('img').css('height', imgH);
        } else {
            owlH = $('.owl-item').height();
            windowH = $(window).height();
            figureH = windowH - owlH;

            $('#homeFigure').css('height', figureH);
            console.log(owlH + " -- " + windowH + " - -" +figureH  );

        }

    });

}
