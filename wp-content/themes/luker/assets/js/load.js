paceOptions = {
    ajax: true,
    document: true,
    eventLag: false
};

Pace.on('done', function() {
    $('#preloader').delay(500).fadeOut(800);
});