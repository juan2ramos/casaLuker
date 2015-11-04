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
    $('body').on('mouseenter', '.owl-pagination', function () {
        $('.projectBusiness').stop().fadeOut(600);
    });

    $('body').on('mouseleave', '.owl-pagination', function () {
        $('.projectBusiness').stop().fadeIn(600);
    });
    $('.gallery, .owl-pagination').on('mouseenter', function () {
        $('.projectBusiness').stop().fadeOut(600);
    });
    $('.gallery, .owl-pagination').on('mouseleave', function () {
        $('.projectBusiness').stop().fadeIn(600);
    });

    $('.LukerWay-cacaoArrowCollapse').on('click', function () {

        $(".LukerWay-cacaoContent").velocity("reverse", {duration: 700});
        $(".LukerWay-cacaoArrow").velocity("reverse", {duration: 700});
        $(".LukerWay-cacaoContent .inline").velocity("reverse", {duration: 400});

        $(".LukerWay-cacaoBack").velocity("reverse", {duration: 700});
        $(this).velocity({opacity: 0,}, {duration: 100, display: "none"});
        $('.LukerWay-cacaoArrow').velocity({opacity: 1}, {duration: 100, display: "block"});

        $('.LukerWay-cacaoContent ul').velocity("reverse", {duration: 700});
        $('.LukerWay-cacaoContentRightUl').velocity("reverse", {duration: 100});
        reverse = false
    });

    $('.LukerWay-cacaoArrow').on('click', function () {

        var ww = $(window).width(),
            cacaoContentH = $(".LukerWay-cacaoContent").height(),
            inlineH = $(".LukerWay-cacaoContent .inline").height(),
            topInline = cacaoContentH / 2 - inlineH / 2 - 50;

        $(".LukerWay-cacaoContent .inline").velocity({top: -topInline}, 400);
        $(this).velocity({opacity: 0,}, {duration: 100, display: "none"})
        $(".LukerWay-cacaoBack").velocity({width: '100%', left: 0}, {duration: 800});
        $('.LukerWay-cacaoArrowCollapse').velocity({opacity: [1, 0]}, {duration: 200, delay: 800, display: 'block'});

        $('.LukerWay-cacaoContent ul').velocity({opacity: [1, 0]}, {duration: 200, delay: 200, display: 'block'});
        $('.LukerWay-cacaoContentRightUl').velocity({opacity: [1, 0]}, {duration: 200, delay: 600, display: 'block'});

        reverse = true
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

    $(".slideFade").owlCarousel({
        singleItem: true,
        transitionStyle: "fade",
        navigation: true,
        navigationText: ["◄", "►"],

    });
    $('.LukerWay-next').on('click', function () {

        var index = $( ".move" ).index( $( ".move .show" ) );

        $('.move').removeClass('show')
        $( ".move:eq( " + index + " )").addClass('show')


    });

    $('.LukerWay-menuEducation a').on('click', function () {

        var target = $(this).data('target');
        if(target == 'LukerWay-grajaLuker'){
            $('.LukerWay-next').hide();
        }else{
            $('.LukerWay-next').show();
        }

        $('.LukerWay-menuEducation a').removeClass('active');
        $(this).addClass('active')
        event.preventDefault();
        $('.LukerWay-cacaoContentRightUl li').removeClass('show')

        $('.' + target).addClass('show')

    });
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
