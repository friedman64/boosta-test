$(document).ready(function () {

    if ($('.banner-slider')) {
        $('.banner-slider').slick({
            draggable: true,
            fade: false,
            slidesToScroll: 1,
            slidesToShow: 1,
            arrows: false,
            dots: true
        });

    }
});