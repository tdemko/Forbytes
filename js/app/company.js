define(['jquery', 'app/quotesCarousel', 'app/emailForm', 'async!http://maps.google.com/maps/api/js?sensor=false'], function ($, quotesCarousel, emailForm, gmaps) {
    var init = function () {
        var quotes = new quotesCarousel('.company .company-principles .quotes-carousel');
        quotes.run();

        loadMaps();
        emailForm.init();
    }

    var loadMaps = function() {
        loadMap($('.head-office .map').get(0), new google.maps.LatLng(56.0167998, 12.7159876), 14, 'Forbytes Head Office');
            loadMap($('.dev-center .map').get(0), new google.maps.LatLng(49.8279882, 23.9910142), 14, 'Forbytes Dev Center');
        },

        loadMap = function (element, coordinates, zoomLevel, markerTitle) {
            var map = new google.maps.Map(element, {
                center: coordinates,
                zoom: zoomLevel,
                zoomControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            new google.maps.Marker({
                position: coordinates,
                map: map,
                title: markerTitle
            });
        };

    return {
        init: init
    };
});