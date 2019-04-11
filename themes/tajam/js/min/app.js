(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
'use strict';

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

},{}],2:[function(require,module,exports){
'use strict';

$(document).ready(function () {

    if ($('.js-mob-toggle')) {
        $('.js-mob-toggle').click(function () {
            $(this).toggleClass('is-active');
            $('.js-mob-menu').stop(true).fadeToggle(300);
        });
    }
});

},{}],3:[function(require,module,exports){
'use strict';

$(document).ready(function () {
    var $videoContainer = $('.js-video-container');
    var videoFlag = false;

    if ($('.js-mob-toggle')) {
        $('.js-play-btn').click(function () {
            $videoContainer.stop(true).fadeIn(300);
            videoFlag = true;
        });

        $(document).click(function (event) {

            if (!$(event.target).closest($('.js-video-section')).length) {
                if (videoFlag === true) {
                    $videoContainer.stop(true).fadeOut(300);
                    $(document).off('click', bodyCloseClick);
                    event.stopPropagation();
                }
            }
        });
    }

    function bodyCloseClick(event) {}
});

},{}],4:[function(require,module,exports){
'use strict';

require('./components/banner-slider');
require('./components/mob-menu');
require('./components/video');

$(document).ready(function () {
    // objectFitImages();
});

},{"./components/banner-slider":1,"./components/mob-menu":2,"./components/video":3}]},{},[4])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJqcy9jb21wb25lbnRzL2Jhbm5lci1zbGlkZXIuanMiLCJqcy9jb21wb25lbnRzL21vYi1tZW51LmpzIiwianMvY29tcG9uZW50cy92aWRlby5qcyIsImpzL21haW4uanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7OztBQ0FBLEVBQUUsUUFBRixFQUFZLEtBQVosQ0FBa0IsWUFBWTs7QUFFMUIsUUFBSSxFQUFFLGdCQUFGLENBQUosRUFBeUI7QUFDckIsVUFBRSxnQkFBRixFQUFvQixLQUFwQixDQUEwQjtBQUN0Qix1QkFBVyxJQURXO0FBRXRCLGtCQUFNLEtBRmdCO0FBR3RCLDRCQUFnQixDQUhNO0FBSXRCLDBCQUFjLENBSlE7QUFLdEIsb0JBQVEsS0FMYztBQU10QixrQkFBTTtBQU5nQixTQUExQjtBQVNIO0FBQ0osQ0FiRDs7Ozs7QUNBQSxFQUFFLFFBQUYsRUFBWSxLQUFaLENBQWtCLFlBQVk7O0FBRTFCLFFBQUksRUFBRSxnQkFBRixDQUFKLEVBQXlCO0FBQ3JCLFVBQUUsZ0JBQUYsRUFBb0IsS0FBcEIsQ0FBMEIsWUFBWTtBQUNsQyxjQUFFLElBQUYsRUFBUSxXQUFSLENBQW9CLFdBQXBCO0FBQ0EsY0FBRSxjQUFGLEVBQWtCLElBQWxCLENBQXVCLElBQXZCLEVBQTZCLFVBQTdCLENBQXdDLEdBQXhDO0FBQ0gsU0FIRDtBQUlIO0FBQ0osQ0FSRDs7Ozs7QUNBQSxFQUFFLFFBQUYsRUFBWSxLQUFaLENBQWtCLFlBQVk7QUFDMUIsUUFBSSxrQkFBa0IsRUFBRSxxQkFBRixDQUF0QjtBQUNBLFFBQUksWUFBWSxLQUFoQjs7QUFFQSxRQUFJLEVBQUUsZ0JBQUYsQ0FBSixFQUF5QjtBQUNuQixVQUFFLGNBQUYsRUFBa0IsS0FBbEIsQ0FBd0IsWUFBWTtBQUNoQyw0QkFBZ0IsSUFBaEIsQ0FBcUIsSUFBckIsRUFBMkIsTUFBM0IsQ0FBa0MsR0FBbEM7QUFDQSx3QkFBWSxJQUFaO0FBRUgsU0FKRDs7QUFNRixVQUFFLFFBQUYsRUFBWSxLQUFaLENBQWtCLFVBQVUsS0FBVixFQUFpQjs7QUFFL0IsZ0JBQUksQ0FBQyxFQUFFLE1BQU0sTUFBUixFQUFnQixPQUFoQixDQUF3QixFQUFFLG1CQUFGLENBQXhCLEVBQWdELE1BQXJELEVBQTZEO0FBQ3pELG9CQUFJLGNBQWMsSUFBbEIsRUFBd0I7QUFDcEIsb0NBQWdCLElBQWhCLENBQXFCLElBQXJCLEVBQTJCLE9BQTNCLENBQW1DLEdBQW5DO0FBQ0Esc0JBQUUsUUFBRixFQUFZLEdBQVosQ0FBZ0IsT0FBaEIsRUFBeUIsY0FBekI7QUFDQSwwQkFBTSxlQUFOO0FBQ0g7QUFDSjtBQUNKLFNBVEQ7QUFVSDs7QUFFRCxhQUFTLGNBQVQsQ0FBd0IsS0FBeEIsRUFBK0IsQ0FFOUI7QUFDSixDQTFCRDs7Ozs7QUNBQSxRQUFRLDRCQUFSO0FBQ0EsUUFBUSx1QkFBUjtBQUNBLFFBQVEsb0JBQVI7O0FBRUEsRUFBRSxRQUFGLEVBQVksS0FBWixDQUFrQixZQUFXO0FBQ3pCO0FBQ0gsQ0FGRCIsImZpbGUiOiJnZW5lcmF0ZWQuanMiLCJzb3VyY2VSb290IjoiIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uKCl7ZnVuY3Rpb24gcihlLG4sdCl7ZnVuY3Rpb24gbyhpLGYpe2lmKCFuW2ldKXtpZighZVtpXSl7dmFyIGM9XCJmdW5jdGlvblwiPT10eXBlb2YgcmVxdWlyZSYmcmVxdWlyZTtpZighZiYmYylyZXR1cm4gYyhpLCEwKTtpZih1KXJldHVybiB1KGksITApO3ZhciBhPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIraStcIidcIik7dGhyb3cgYS5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGF9dmFyIHA9bltpXT17ZXhwb3J0czp7fX07ZVtpXVswXS5jYWxsKHAuZXhwb3J0cyxmdW5jdGlvbihyKXt2YXIgbj1lW2ldWzFdW3JdO3JldHVybiBvKG58fHIpfSxwLHAuZXhwb3J0cyxyLGUsbix0KX1yZXR1cm4gbltpXS5leHBvcnRzfWZvcih2YXIgdT1cImZ1bmN0aW9uXCI9PXR5cGVvZiByZXF1aXJlJiZyZXF1aXJlLGk9MDtpPHQubGVuZ3RoO2krKylvKHRbaV0pO3JldHVybiBvfXJldHVybiByfSkoKSIsIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcblxuICAgIGlmICgkKCcuYmFubmVyLXNsaWRlcicpKSB7XG4gICAgICAgICQoJy5iYW5uZXItc2xpZGVyJykuc2xpY2soe1xuICAgICAgICAgICAgZHJhZ2dhYmxlOiB0cnVlLFxuICAgICAgICAgICAgZmFkZTogZmFsc2UsXG4gICAgICAgICAgICBzbGlkZXNUb1Njcm9sbDogMSxcbiAgICAgICAgICAgIHNsaWRlc1RvU2hvdzogMSxcbiAgICAgICAgICAgIGFycm93czogZmFsc2UsXG4gICAgICAgICAgICBkb3RzOiB0cnVlXG4gICAgICAgIH0pO1xuXG4gICAgfVxufSk7IiwiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuXG4gICAgaWYgKCQoJy5qcy1tb2ItdG9nZ2xlJykpIHtcbiAgICAgICAgJCgnLmpzLW1vYi10b2dnbGUnKS5jbGljayhmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZUNsYXNzKCdpcy1hY3RpdmUnKVxuICAgICAgICAgICAgJCgnLmpzLW1vYi1tZW51Jykuc3RvcCh0cnVlKS5mYWRlVG9nZ2xlKDMwMClcbiAgICAgICAgfSlcbiAgICB9XG59KTsiLCIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG4gICAgbGV0ICR2aWRlb0NvbnRhaW5lciA9ICQoJy5qcy12aWRlby1jb250YWluZXInKVxuICAgIGxldCB2aWRlb0ZsYWcgPSBmYWxzZVxuXG4gICAgaWYgKCQoJy5qcy1tb2ItdG9nZ2xlJykpIHtcbiAgICAgICAgICAkKCcuanMtcGxheS1idG4nKS5jbGljayhmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICR2aWRlb0NvbnRhaW5lci5zdG9wKHRydWUpLmZhZGVJbigzMDApXG4gICAgICAgICAgICAgIHZpZGVvRmxhZyA9IHRydWVcblxuICAgICAgICAgIH0pXG5cbiAgICAgICAgJChkb2N1bWVudCkuY2xpY2soZnVuY3Rpb24gKGV2ZW50KSB7XG5cbiAgICAgICAgICAgIGlmICghJChldmVudC50YXJnZXQpLmNsb3Nlc3QoJCgnLmpzLXZpZGVvLXNlY3Rpb24nKSkubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgaWYgKHZpZGVvRmxhZyA9PT0gdHJ1ZSkge1xuICAgICAgICAgICAgICAgICAgICAkdmlkZW9Db250YWluZXIuc3RvcCh0cnVlKS5mYWRlT3V0KDMwMClcbiAgICAgICAgICAgICAgICAgICAgJChkb2N1bWVudCkub2ZmKCdjbGljaycsIGJvZHlDbG9zZUNsaWNrKTtcbiAgICAgICAgICAgICAgICAgICAgZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBmdW5jdGlvbiBib2R5Q2xvc2VDbGljayhldmVudCkge1xuXG4gICAgfVxufSk7IiwicmVxdWlyZSgnLi9jb21wb25lbnRzL2Jhbm5lci1zbGlkZXInKTtcbnJlcXVpcmUoJy4vY29tcG9uZW50cy9tb2ItbWVudScpO1xucmVxdWlyZSgnLi9jb21wb25lbnRzL3ZpZGVvJyk7XG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgIC8vIG9iamVjdEZpdEltYWdlcygpO1xufSk7Il19
