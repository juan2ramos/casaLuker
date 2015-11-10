var $NoseSpan = $('#Nose span'),
    NoseSpanCount = $NoseSpan.length,
    current = 0,
    $cacao = $('.cocoa-nose');

$('#NosePrev').on('click', function () {
    $NoseSpan.removeClass('show');
    current =  (current == 0)?  NoseSpanCount - 1 : current - 1;
    $NoseSpan.eq(current).addClass('show');
    $cacao.css('background',$NoseSpan.eq(current).data('color'));

});

$('#NoseNext').on('click', function () {
    $NoseSpan.removeClass('show');
    current =  (current == NoseSpanCount - 1)?  0 : current + 1;
    $NoseSpan.eq(current).addClass('show');
    $cacao.css('background',$NoseSpan.eq(current).data('color'));
});