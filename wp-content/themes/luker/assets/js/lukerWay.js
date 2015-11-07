(function (window) {
    var reverse = false,
        reverseRight = false,
        indexSystem = 0,
        indexSopport = 0,
        indexLi;
    $('.LukerWay-bar span, .LukerWay-headerContent a, .LukerWay-nav ul a').on('click', function () {

        var target = $(this).data('target'),
            top = $("." + target).offset().top;

        $('html, body').animate({scrollTop: top + 'px'}, 1000);
        return false;
    });
    $('.LukerWay-nav .menu').on('click', function () {
        $('.LukerWay-nav').toggleClass('show');
        $('.menu span').toggleClass('show');
        if ($(window).scrollTop() < $(window).height()) {

            $('html, body').animate({scrollTop: $(window).height()}, 500);
        }
        return false;
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

        $(".LukerWay-cacao .LukerWay-cacaoContent").velocity("reverse", {duration: 700});
        $(".LukerWay-cacao .LukerWay-cacaoArrow").velocity("reverse", {duration: 700});
        $(".LukerWay-cacao .LukerWay-cacaoContent .inline").velocity("reverse", {duration: 400});

        $(".LukerWay-cacao .LukerWay-cacaoBack").velocity("reverse", {duration: 700});
        $(this).velocity({opacity: 0,}, {duration: 100, display: "none"});
        $('.LukerWay-cacao .LukerWay-cacaoArrow').velocity({opacity: 1}, {duration: 100, display: "block"});

        $('.LukerWay-cacao .LukerWay-cacaoContent ul').velocity("reverse", {duration: 700});
        $('.LukerWay-cacao .LukerWay-cacaoContentRightUl').velocity("reverse", {duration: 100});
        reverse = false
    });

    $('.LukerWay-cacaoArrow').on('click', function () {

        var ww = $(window).width(),
            cacaoContentH = $(".LukerWay-cacaoContent").height(),
            inlineH = $(".LukerWay-cacaoContent .inline").height(),
            topInline = cacaoContentH / 2 - inlineH / 2 - 50;

        $(".LukerWay-cacao .LukerWay-cacaoContent .inline").velocity({top: -topInline}, 400);
        $(this).velocity({opacity: 0,}, {duration: 100, display: "none"})
        $(".LukerWay-cacao .LukerWay-cacaoBack").velocity({width: '100%', left: 0}, {duration: 800});
        $('.LukerWay-cacao .LukerWay-cacaoArrowCollapse').velocity({opacity: [1, 0]}, {duration: 200, delay: 800, display: 'block'});

        $('.LukerWay-cacao .LukerWay-cacaoContent ul').velocity({opacity: [1, 0]}, {duration: 200, delay: 200, display: 'block'});
        $('.LukerWay-cacao .LukerWay-cacaoContentRightUl').velocity({opacity: [1, 0]}, {duration: 200, delay: 600, display: 'block'});

        reverse = true
    });

    $('.LukerWay-cacaoArrowRight').on('click', function () {

        var ww = $(window).width(),
            cacaoContentH = $(".LukerWay-cacaoContent").height(),
            inlineH = $(".LukerWay-cacaoContent .inline").height(),
            topInline = cacaoContentH / 2 - inlineH / 2 - 50;
        $(".LukerWay-term .inline").velocity({left:20}, 800).velocity({top: -topInline},300);
        $(this).velocity({opacity: 0,}, {duration: 100, display: "none"})
        $(".LukerWay-cacaoBackRight").velocity({width: '100%', left: 0}, {duration: 800});
        $('.LukerWay-cacaoArrowCollapseRight').velocity({opacity: [1, 0]}, {duration: 200, delay: 800, display: 'block'});

        $('.LukerWay-term .LukerWay-cacaoContent ul').velocity({opacity: [1, 0]}, {duration: 400, delay: 500, display: 'block'});
        //$('.LukerWay-cacaoContentRightUl').velocity({opacity: [1, 0]}, {duration: 200, delay: 600, display: 'block'});

        reverseRight = true
    });
    $('.LukerWay-cacaoArrowCollapseRight').on('click', function () {
        var ww =  $(window).width(),
            leftInline = ww/2 - (ww/2 * .04);

        $(".LukerWay-term .LukerWay-cacaoBackRight").velocity("reverse", {duration: 700, delay:800});
        $(".LukerWay-term .inline").velocity("reverse", {duration: 700}).velocity({left:leftInline}, 800);
        $('.LukerWay-term .LukerWay-cacaoContent ul').velocity("reverse", {duration: 700});
        $(".LukerWay-cacaoArrowRight").velocity({opacity: 1,}, {duration: 200, display: "block", delay:1500})
        $(this).velocity({opacity: 0}, {duration: 100, display: "none"});
        reverseRight = false
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


        if($("a[data-target='LukerWay-support']").hasClass('active')){

            indexSupport = $( ".move" ).index( $( ".move.show" ) );
            if(indexSupport == 2) indexSupport = -1;
            $('.move').removeClass('show')
            indexSupport++;
            $( ".move:eq( " + indexSupport + " )").addClass('show')

        }else{
            indexSystem = $( ".moveSystem" ).index( $( ".moveSystem.show" ) );
            if(indexSystem == 1) indexSystem = -1;
            $('.moveSystem').removeClass('show')
            indexSystem++;
            $( ".moveSystem:eq( " + indexSystem + " )").addClass('show')

        }



    });

    $('.LukerWay-prev').on('click', function () {


        if($("a[data-target='LukerWay-support']").hasClass('active')){
            indexSupport = $( ".move" ).index( $( ".move.show" ) );
            if(indexSupport == 0) indexSupport = 3;
            $('.move').removeClass('show')
            indexSupport--;
            $( ".move:eq( " + indexSupport + " )").addClass('show')
        }else{
            indexSystem = $( ".moveSystem" ).index( $( ".moveSystem.show" ) );
            if(indexSystem == 0) indexSystem = 2;
            $('.moveSystem').removeClass('show')
            indexSystem--;
            $( ".moveSystem:eq( " + indexSystem + " )").addClass('show')

        }



    });

    $('.LukerWay-menuEducation a').on('click', function () {

        var target = $(this).data('target');
        if(target == 'LukerWay-support' || target == 'LukerWay-system'){
            $('.LukerWay-next').show();
            $('.LukerWay-prev').show();
        }else{
            $('.LukerWay-next').hide();
            $('.LukerWay-prev').hide();
        }

        $('.LukerWay-menuEducation a').removeClass('active');
        $(this).addClass('active');
        $('.LukerWay-cacaoContentRightUl li').removeClass('show')

        $('.' + target).addClass('show');
        return false;
    });

    $('.citiesFirst').on('click',function(){
        $(this).css('z-index','4');
        indexLi = $( '.citiesFirst' ).index( this );


        $('.citiesUl').velocity({opacity: [1, 0]}, {duration: 800, delay: 1400});
        $('.cities h4').velocity({opacity:'0'},{duration:700,delay:600});
        if( indexLi  == 0){
            $(this).velocity({width:'100vw'},{duration:600,delay:100}).velocity({height:'60vh'},400);
        }
        if( indexLi  == 1){
            $(this).velocity({width:'100vw',left:0},{duration:600,delay:100}).velocity({height:'60vh'},400);
        }
        if( indexLi  == 2){
            $(this).velocity({width:'100vw',left:0},{duration:600,delay:100}).velocity({height:'60vh'},400);
        }

    });

    $('.citiesBack').on('click', function(){
        $('.citiesUl').velocity("reverse", {duration: 400});
        $('.cities h4').velocity("reverse", {duration: 400});
        if( indexLi  == 0){
            $('.citiesFirst').eq(0).velocity({width:'33.4%'},{duration:600,delay:100}).velocity({height:'45vh'},400);
        }
        if( indexLi  == 1){
            $('.citiesFirst').eq(indexLi).velocity({width:'33.4%',left:'33.3%'},{duration:600,delay:100}).velocity({height:'45vh'},400);
        }
        if( indexLi  == 2){
            $('.citiesFirst').eq(indexLi).velocity({width:'33.4%',left:'66.6%'},{duration:600,delay:100}).velocity({height:'45vh'},400);
        }
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
