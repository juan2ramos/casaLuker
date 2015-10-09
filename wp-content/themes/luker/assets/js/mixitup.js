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

        $('.Recipes-chefs figure').on('click', function () {
            var $figure = $(this),
                filter = $figure.data('filter');
            $('#chef').val(filter);
            self.parseFilters();
            self.oneChef($figure);
        })

        $('.Recipes-chefsBack').on('click', function () {
            self.close()
        })
        $('.mix').on('click', function(){
            self.openDetail($(this));
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
    openDetail: function($mix){

        var url = $("#Filters").attr("action") + "/recipe/" + $mix.data('name')
            self = this;
        $.post( url,self.recipesDetail );
    },

    recipesDetail: function(e){
        r = JSON.parse(e);

        console.log(r.post_content)
        $('main').html(r.post_content);
    },

    close: function () {
        var self = this;

        $('#chef').val('');
        self.$RecipesChefs.find('figure').removeClass('open')
        self.$RecipesChefs.find('figure').removeClass('close')
        $('.Recipes-chefsBack').removeClass('open');

        self.parseFilters();
    },

    oneChef: function ($figure) {

        var self = this;

        $('.Recipes-chefsBack').addClass('open');
        self.$RecipesChefs.find('figure').removeClass('open')
        self.$RecipesChefs.find('figure').removeClass('close')
        $figure.addClass('open');
        self.$RecipesChefs.find('figure').not(".open").addClass('close');

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
    }

};