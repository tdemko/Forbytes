define(['jquery'], function($) {
    var quotesCarousel = function (quotesSelector, speed) {
        var activeQuoteIndex = 0;
        var $quotes = $(quotesSelector).find('blockquote');
        var defaultSpeed = 8000;
        var intervalId;

        speed = !!speed ? speed : defaultSpeed;
        var changeAnimation = function (elemToHide, elemToShow) {
            elemToHide.addClass('animated fadeOutLeft');
            elemToShow.removeClass('fadeOutLeft');
            elemToShow.addClass('animated fadeInRight');
            elemToShow.show();

        };

        var run = function () {
            intervalId = setInterval(function () {
                var quotesCount = $quotes.length;
                var nextQuote = 0;
                if (activeQuoteIndex < quotesCount - 1) {
                    nextQuote = activeQuoteIndex + 1;
                }

                changeAnimation($quotes.eq(activeQuoteIndex), $quotes.eq(nextQuote));

                activeQuoteIndex = nextQuote;
            }, speed);
        };

        var stop = function () {
            clearInterval(intervalId);
        }

        return {
            run: run,
            stop: stop
        };
    }

    return quotesCarousel;
})

