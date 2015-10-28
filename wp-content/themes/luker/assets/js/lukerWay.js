(function (window) {
    var reverse = false;
    $('.LukerWay-bar span, .LukerWay-headerContent a, .LukerWay-nav ul a').on('click', function () {
        event.preventDefault();
        var target = $(this).data('target'),
            top = $("." + target).offset().top;

        $('html, body').animate({scrollTop: top + 'px'}, 1000);
    });
    $('.LukerWay-nav .menu').on('click', function () {
        event.preventDefault();
        $('.LukerWay-nav').toggleClass('show');
        $('.menu span').toggleClass('show');
        if ($(window).scrollTop() < $(window).height()) {

            $('html, body').animate({scrollTop: $(window).height()}, 500);
        }
    });
    $('body').on('mouseenter', '.owl-pagination',function () {
        $('.projectBusiness').stop().fadeOut(600);
    });

    $('body').on('mouseleave', '.owl-pagination',function () {
        $('.projectBusiness').stop().fadeIn(600);
    });
    $('.gallery, .owl-pagination').on('mouseenter', function () {
        $('.projectBusiness').stop().fadeOut(600);
    });
    $('.gallery, .owl-pagination').on('mouseleave', function () {
        $('.projectBusiness').stop().fadeIn(600);
    });


    $('.LukerWay-cacaoArrow').on('click', function () {

        var ww = $(window).width();

        if(reverse){
            $(".LukerWay-cacaoContent").velocity("reverse", { duration: 700});
            $(".LukerWay-cacaoContent div:first-child").velocity("reverse", { duration: 700});
            $(".LukerWay-cacaoArrow").velocity("reverse", { duration: 700});
            reverse = false
        }else{
            $(".LukerWay-cacaoContent").velocity( { width: '100%', marginLeft: 0}, 800);
            $(".LukerWay-cacaoContent div:first-child").velocity( { top: '50%'}, 700);

            $(".LukerWay-cacaoArrow").velocity( { right: -ww/2 + 10}, {duration: 800,delay: 100}).velocity({rotateZ: 180}, 300);

            reverse = true
        }

    });
    $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        singleItem: true,
        autoHeight: true,
        afterUpdate: function () {
            updateSize();
        },
        afterInit: function () {
            updateSize();
        }
    });
    $(".myBackgroundImage").cover();




})(window);

$(window).scroll(function () {

    $('.menu span').removeClass('show');
    if ($(window).scrollTop() > $(window).height()) {
        $('.LukerWay-nav').removeClass('show');

        $('.LukerWay-nav').stop().animate({'top': $(window).scrollTop() - $(window).height()}, '100', 'swing');
    } else {
        $('.LukerWay-nav').stop().animate({'top': 0}, '100', 'swing');
    }
});
function updateSize() {
    var heightContent = parseInt($('.owl-item').height()),
        widthContent = parseInt($('.owl-item').width()),
        ratioContent = widthContent / heightContent;

    $(".owl-item").each(function () {

        $(this).find('img').cover();
    });
}
