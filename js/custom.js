(function ($) {
    'use strict';

    var $window = $(window);

    // hover in desktop mode
    function toggleDropdown(e) {
        const _d = $(e.target).closest('.dropdown'),
                _m = $('.dropdown-menu', _d);
        setTimeout(function () {
            const shouldOpen = e.type !== 'click' && _d.is(':hover');
            _m.toggleClass('show', shouldOpen);
            _d.toggleClass('show', shouldOpen);
            $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
        }, e.type === 'mouseleave' ? 300 : 0);
    }
    $('body')
        .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
        .on('click', '.dropdown-menu a', toggleDropdown);

    // Welcome Carousel Active Code
    $('#welcomeSlider').carousel({
        pause: false,
        interval: 5000
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