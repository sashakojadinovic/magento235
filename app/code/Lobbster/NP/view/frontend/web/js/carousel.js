define(['jquery', 'slick'], function($){
    return function(config, element){
        'use strict';
        $('.lobbster-related-products-carousel').slick(
            {
                slidesToScroll: 2,
                swipeToSlide: true,
                slidesToShow: 4,
                dots: true,
                infinite: true,
                arrows: true,
                autoplay: true
            }
        );
    }
});
