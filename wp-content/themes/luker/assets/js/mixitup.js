$(function(){
    dropdownFilter.init();
    $('#Recipes').mixItUp({
        load: {
            filter: 'all'
        },
        controls: {
            enable: false
        },
        callbacks: {
            onMixEnd: function(state){
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


    init: function(){
        var self = this;
        self.$filters = $('#Filters');
        self.$reset = $('#Reset');
        self.$container = $('#Recipes');

        self.$filters.find('fieldset').each(function(){
            self.groups.push({
                $dropdown : $(this).find('select'),
                active: ''
            });
        });

        self.bindHandlers();
    },

    bindHandlers: function(){
        var self = this;

        $('.Recipes-chefs figure').on('click',function(){
            var $figure = $(this),
                filter = $figure.data('filter');
            $('#chef').val(filter);
            self.parseFilters();
            self.oneChef($figure);
        })

        $('.Recipes-chefsBack').on('click',function(){
            self.close()
        })

        self.$filters.on('change', 'select', function(e){
            e.preventDefault();

            self.parseFilters();
        });

        self.$reset.on('click', function(e){
            e.preventDefault();

            self.$filters.find('select').val('');

            self.parseFilters();
        });
    },

    close : function(){
        var self = this;

        self.$RecipesChefs.find('figure').removeClass('open')
        self.$RecipesChefs.find('figure').removeClass('close')
        $('.Recipes-chefsBack').toggleClass('open');

    },

    oneChef : function($figure){

        var self = this;

        $('.Recipes-chefsBack').toggleClass('open');
        self.$RecipesChefs.find('figure').removeClass('open')
        self.$RecipesChefs.find('figure').removeClass('close')
        $figure.addClass('open');
        self.$RecipesChefs.find('figure').not( ".open" ).addClass( 'close' );

    },

    parseFilters: function(){
        var self = this;

        for(var i = 0, group; group = self.groups[i]; i++){
            group.active = group.$dropdown.val();
        }

        self.concatenate();
    },

    concatenate: function(){
        var self = this;

        self.outputString = '';

        for(var i = 0, group; group = self.groups[i]; i++){
            self.outputString += group.active;
        }

        !self.outputString.length && (self.outputString = 'all');


        if(self.$container.mixItUp('isLoaded')){
            self.$container.mixItUp('filter', self.outputString);
        }
    }

};