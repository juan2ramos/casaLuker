$(function() {
    var svg = $('svg#map-svg');

    var changeColor = function() {
        var region = $(this).attr('id').replace(/-.*$/, '');
        var color = svg.find('#' + region + '-circle circle').attr('fill');
        var regions = {
            santander: 1,
            sanmartin: 1,
            arauca: 1,
            tumaco: 1
        }

        delete regions[region];

        for(var key in regions) {
            removeColor(key);
        }

        svg.find('#' + region + '-circle circle').css({
            fillOpacity: '1',
            stroke     : color
        });

        svg.find('#' + region + '-shape path').css({
            fill: color
        });

        svg.find('#' + region + '-line circle').css({
            fill: color
        });

        svg.find('#border path').css({
            fill: color
        });

        $('.mapsection .all-info').fadeOut(200, function() {
            var color = {
                'arauca': 'yellow',
                'sanmartin': 'green',
                'santander': 'purple',
                'tumaco': 'orange'
            };

            $('.mapsection')
                .removeClass('orange')
                .removeClass('green')
                .removeClass('purple')
                .removeClass('yellow')
                .addClass(color[region]);

            $('.mapsection .info').addClass('hide');
            $('#' + region).removeClass('hide');

            $(this).fadeIn(200);
        });
    }
    
    var removeColor = function(region) {
        svg.find('#' + region + '-circle circle').css({
            fillOpacity: '0',
            stroke     : '#FFFFFF'
        });

        svg.find('#' + region + '-shape path').css({
            fill: '#E6E6E6'
        });

        svg.find('#' + region + '-line circle').css({
            fill: '#CCCCCC'
        });
    }

    svg.find('#santander-circle, #santander-shape, #santander-line').on('click', changeColor);
    svg.find('#arauca-circle, #arauca-shape, #arauca-line').on('click', changeColor);
    svg.find('#sanmartin-circle, #sanmartin-shape, #sanmartin-line').on('click', changeColor);
    svg.find('#tumaco-circle, #tumaco-shape, #tumaco-line').on('click', changeColor).click();
});
