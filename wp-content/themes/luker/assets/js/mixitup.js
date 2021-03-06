$(function () {
    dropdownFilter.init();
    $('#Recipes').mixItUp({
        load: {
            filter: 'all'
        },
        controls: {
            enable: false
        },
        callbacks: {
            onMixEnd: function (state) {
                console.log(state.activeFilter)
            }
        }
    });
});

var measure = true;
var dropdownFilter = {

    $filters: null,
    $reset: null,
    groups: [],
    outputArray: [],
    outputString: '',
    $RecipesChefs: $('.Recipes-chefs'),


    init: function () {
        var self = this;
        self.$filters = $('#Filters');
        self.$reset = $('#Reset');
        self.$container = $('#Recipes');

        self.$filters.find('fieldset').each(function () {
            self.groups.push({
                $dropdown: $(this).find('select'),
                active: ''
            });
        });

        self.bindHandlers();
    },

    bindHandlers: function () {
        var self = this;

        $(document).on('keydown',function(e){
            if ( e.which == 27 ) {
                self.closeDetail()
            }
        });

        $('.Recipes-chefs figure').on('click', function () {
            var $figure = $(this),
                filter = $figure.data('filter');
            $('#chef').val(filter);
            self.parseFilters();
            self.oneChef($figure);
        });

        $('.gr').on('click', function () {

            $(this).html((measure)?'oz<span>►</span>':'gr<span>►</span>');
            var $liData = $('.ingredients li');
            $liData.each(function(i){
                var nm = $( this).find('.nm'),
                    ms = $( this).find('.ms'),

                    ct = $( this).find('.ct'),
                    mt = $( this).find('.mt'),

                    number =  nm.text(),
                    numberT =  nm.text();

                if(!isNaN(parseInt(numberT))){
                    if(measure){
                        ms.text('ºF')
                        numberT = 1.8 * numberT + 32 ;
                        numberT = numberT.toFixed(3);
                    }else{
                        numberT = (numberT - 32)/1.8;
                        ms.text('ºC')
                        numberT = numberT.toFixed();
                    }
                    nm.text(number)
                    mt.text(numberT)
                }

                if(!isNaN(parseInt(number))){
                    if(measure){
                        ms.text('oz')
                        number = number / 28.3495;

                        number = number.toFixed(3);
                    }else{
                        number = number * 28.3495;
                        ms.text('g')
                        number = number.toFixed();
                    }

                    nm.text(number)
                }
            });

            measure = (measure)?false:true;
        })

        $('.Recipes-chefsBack').on('click', function () {
            self.close()
        })
        $('.mix').on('click', function () {
            self.openDetail($(this));
        });
        $('#closeX').on('click', function () {
            self.closeDetail();
        });


        self.$filters.on('change', 'select', function (e) {
            e.preventDefault();
            self.parseFilters();

            chef = $('#chef').val();
            if (chef.length == 0) {
                self.close();
            } else {
                $figure = $('.Recipes-chefs').find("[data-filter='" + chef + "']");
                self.oneChef($figure);
            }

        });

        self.$reset.on('click', function (e) {
            e.preventDefault();

            self.$filters.find('select').val('');

            self.parseFilters();
        });
    },
    openDetail: function ($mix) {

        var url = $("#Filters").attr("action") + "/recipe/" + $mix.data('name'),
        self = this;

        $('.loading').show();
        var postData = {post: 'true'};
        $.post(url, postData, self.recipesDetail);
    },


    recipesDetail: function (e) {
        var parseData = JSON.parse(e), self = dropdownFilter;
        $('.RecipeDetail').css('display', 'block')
        urlB = $('#Filters').data('url');
        urlB = urlB.split("/");

        console.log(urlB);
        $('.RecipeDetail-header').css('background-image', 'url(http://' + urlB[2] + '/' + urlB[3] + '/' + parseData.banner + ')')
        $('body').css('overflow-y', 'hidden');
        $('.loading').hide();
        self.templateDetail(parseData);


    },
    closeDetail: function () {

        $('.RecipeDetail').css('display', 'none')
        $('body').css('overflow-y', 'scroll');

        var close = $('.CloseLink').data('close');
        window.history.pushState("recipe", "Title", $('#Filters').data('url') + "/" + close);
        return false
    },

    close: function () {
        var self = this;
        $('#chef').val('');
        //self.$RecipesChefs.find('figure').removeClass('open')
        var $allLess = self.$RecipesChefs.find('figure')
        if($(window).width() > 900){
            $allLess.velocity({width: '33%'}, {duration: 500});
        }
        else{
            $allLess.velocity({width: '100%'}, {duration: 500});
        }

        self.$RecipesChefs.find('figure').removeClass('open')
        $('.Recipes-chefsBack').removeClass('open');
        $allLess.find('.Recipes-chefsContent').css('display','block')
        self.parseFilters();
        self.$RecipesChefs.find('figure').removeClass('close');
    },

    oneChef: function ($figure) {

        var self = this;
        $('.Recipes-chefsBack').addClass('open');
        var $allLess = self.$RecipesChefs.find('figure').not($figure);
        $allLess.velocity({width: 0}, {duration: 500});
        $figure.velocity({width: '100%'}, {duration: 500,complete:function(){
           console.log($allLess)
            $allLess.find('.Recipes-chefsContent').css('display','none')
        }});
        $figure.addClass('open');
        self.$RecipesChefs.find('figure').not(".open").addClass('close');
        console.log($allLess);
       /* $('.Recipes-chefsBack').addClass('open');
        self.$RecipesChefs.find('figure').removeClass('open')
        //self.$RecipesChefs.find('figure').removeClass
        $figure.velocity({opacity: 0,}, {duration: 100, display: "none"});
        $figure.addClass('open');
        self.$RecipesChefs.find('figure').not(".open").addClass('close');*/

    },

    parseFilters: function () {
        var self = this;

        for (var i = 0, group; group = self.groups[i]; i++) {
            group.active = group.$dropdown.val();
        }

        self.concatenate();
    },

    concatenate: function () {
        var self = this;

        self.outputString = '';

        for (var i = 0, group; group = self.groups[i]; i++) {
            self.outputString += group.active;
        }

        !self.outputString.length && (self.outputString = 'all');


        if (self.$container.mixItUp('isLoaded')) {
            self.$container.mixItUp('filter', self.outputString);
        }
    },

    templateDetail: function (data) {

        var $contentRecipe = $('#RecipeDetail-content'),
            $chefName = $('#chefName'),
            $servings = $('#servings'),
            $level = $('#level'),
            $figureChef = $('#RecipeDetail-figure'),
            $titleChef = $('.RecipeDetail-chefContent h3'),
            $descriptionChef = $('.RecipeDetail-chefContent p'),
            $imageCocoa = $('#imageCocoa'),
            $headerTitle = $('.RecipeDetail-headerTitle'),
            $pdf = $('.pdf'),
            urlB = $('#Filters').data('url');
        urlB = urlB.split("/");


        $contentRecipe.html(data.content);
        $chefName.html(data.chefName);
        $servings.html(data.servings);
        $headerTitle.html(data.tittle);
        $imageCocoa.html('<img src="' + data.imageCocoa + '" />')
        $pdf.html('<a href="http://' + urlB[2] + '/' + urlB[3] + '/' + data.pdf + '" target="_blank">pdf <span> ► </span></a>');
        //$level.html(data.level);
        $('meta[name=description]').attr('content', data.content.substring(0, 165));
        $('#level svg:nth-child(-n + ' + data.level + ' ) .st1').css('fill', '#fff');
        $titleChef.html(data.chefName);
        $descriptionChef.html(data.chefDescription);
        $figureChef.html(' <img src="' + data.chefImage + '" alt="">');
        window.history.pushState("recipes", "Title", $('#Filters').data('url') + "/recipe/" + data.slug);
    }

};