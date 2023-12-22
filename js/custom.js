(function ($) {
    'use strict';

    var $window = $(window);

    // Welcome Carousel Active Code
    $('#welcomeSlider').carousel({
        pause: false,
        interval: 4000
    });

    // Gallery Menu Style Active Code
    $('.gallery-menu button.btn').on('click', function () {
        $('.gallery-menu button.btn').removeClass('active');
        $(this).addClass('active');
    });

    // Masonary Gallery Active Code
    if ($.fn.imagesLoaded) {
        $('.gallery-column').imagesLoaded(function () {
            // filter items on button click
            $('.gallery-menu').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // init Isotope
            var $grid = $('.gallery-column').isotope({
                itemSelector: '.column_single_gallery_item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.column_single_gallery_item'
                }
            });
        });
    }

})(jQuery);