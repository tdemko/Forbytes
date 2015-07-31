define(['app/technologiesWeUse', 'app/emailForm', 'jquery', 'fullPage', 'scrollTo'], function (technologiesWeUse, emailForm, $) {
    var initFullPage = function() {
        $('#fullpage').fullpage({
            controlArrows: false,
            autoScrolling: false,
            fitToSection: false,
            afterRender: function () {
                $('.services').css('display', 'block');
                setTimeout(function () {
                    $('#header .header-background').css('opacity', 0.8);
                    $('.services .home .what-we-do .background').css('opacity', 1);
                    $('.services .home .what-we-do .adv-big h1').addClass('animated fadeInDown');
                    $('.services .home .what-we-do .adv-big p').addClass('animated fadeInDown');
                    $('.services .home .what-we-do .adv-big button').addClass('animated fadeInDown');
                    $('.services .home .what-we-do .adv-small h1').addClass('animated fadeInDown');
                    $('.services .home .what-we-do .adv-small .icon').addClass('animated fadeInDown');
                }, 0);
            }
        });
    }
   
    var initScrollForHomeSection = function() {
        $(window).on('scroll', function () {
            var scrollTop = $(window).scrollTop(),
                fullPage = $('#fullpage'),
                fullPageOffset = fullPage.offset(),
                fullPageBottomPosition = fullPage.height() + fullPageOffset.top;

            if (scrollTop > fullPageBottomPosition - 70) {
                $('.services #header .header-background').css('opacity', 1);
                console.log('fadeTo 1');
            } else {
                $('.services #header .header-background').css('opacity', 0.8);
                console.log('fadeTo 0.8');
            }
        });

        $('.services .home .what-we-do button').on('click', function () {
            $(window).scrollTo('.services section.what-we-do', { duration: 500, offset: -55 });
        });

        $('.services .home .what-we-do .icon.arrow-down').on('click', function () {
            $(window).scrollTo('.services section.what-we-do', { duration: 500, offset: -45 });
        });
    }
  



    var init = function () {
        initFullPage();
        initScrollForHomeSection();
        technologiesWeUse.init();
        emailForm.init();
    }

    return {
        init: init
    }

});