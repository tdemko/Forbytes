require.config({
    baseUrl: templateUrl + '/js',
    paths : {
        jquery: 'libs/jquery-1.11.2.min' ,
        fullPage: 'libs/jquery.fullPage.min',
        scrollTo: 'libs/jquery.scrollTo.min',
        async: 'libs/async.min',
        'app/services': 'app/services.min',
        'app/clients': 'app/clients.min',
        'app/company': 'app/company.min',
        'app/emailForm': 'app/emailform.min',
        'app/quotesCarousel': 'app/quotescarousel.min',
        'app/technologiesWeUse': 'app/technologiesweuse.min'
    },
    shim: {
        'fullPage': ['jquery'],
        'scrollTo': ['jquery']
    },
    map: {
        // '*' means all modules will get 'jquery-private'
        // for their 'jquery' dependency.
        '*': { 'jquery': 'libs/jquery-private.min' },

        // 'jquery-private' wants the real jQuery module
        // though. If this line was not here, there would
        // be an unresolvable cyclic dependency.
        'libs/jquery-private.min': { 'jquery': 'jquery' }
    }
});


require(['jquery'], function($) {
    $('#header .humb-menu').on('click', function () {
        var $nav = $('#header nav.mobile');
        if ($nav.hasClass('expanded')) {
            $nav.slideUp();
            $nav.removeClass('expanded');
        } else {
            $nav.slideDown();
            $nav.addClass('expanded');
        }
    });
});