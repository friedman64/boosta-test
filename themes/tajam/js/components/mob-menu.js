$(document).ready(function () {

    if ($('.js-mob-toggle')) {
        $('.js-mob-toggle').click(function () {
            $(this).toggleClass('is-active')
            $('.js-mob-menu').stop(true).fadeToggle(300)
        })
    }
});