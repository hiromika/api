$(document).ready(function () {

    $(window).on('scroll', function () {

        if ($(window).scrollTop() >= $('#top').position().top) {
            $('#icon-arrow').removeClass('fa-arrow-up').addClass('fa-arrow-down')
        }

        if ($(window).scrollTop() >= $('#flux').offset().top + $('#flux').outerHeight() - window.innerHeight) {
            $('#icon-arrow').removeClass('fa-arrow-down').addClass('fa-arrow-up')
        }
    });

    $('.back-to-top').click(function () {
        if ($("#icon-arrow").hasClass("fa-arrow-up")) {
            $("html,body").animate({ scrollTop: 0 }, 1000);
        } else {
            $('html,body').animate({ scrollTop: document.body.scrollHeight }, 5000);
            return false;
        }
    });

});