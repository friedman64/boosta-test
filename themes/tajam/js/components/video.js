$(document).ready(function () {
    let $videoContainer = $('.js-video-container')
    let videoFlag = false

    if ($('.js-mob-toggle')) {
          $('.js-play-btn').click(function () {
              $videoContainer.stop(true).fadeIn(300)
              videoFlag = true

          })

        $(document).click(function (event) {

            if (!$(event.target).closest($('.js-video-section')).length) {
                if (videoFlag === true) {
                    $videoContainer.stop(true).fadeOut(300)
                    $(document).off('click', bodyCloseClick);
                    event.stopPropagation();
                }
            }
        });
    }

    function bodyCloseClick(event) {

    }
});