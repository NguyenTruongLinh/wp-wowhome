$(document).ready(function() {
    $('.owl-benefit').owlCarousel({
        loop: false,
        items: 1,
        nav: true,
        dots: false,
        navText: ['<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>']
    });

    $('.owl-benefit').lightGallery({
        selector: '.item'
    });

    window.onscroll = function() { scrollFunction() };
    scrollFunction();

    AOS.init({
        disable: 'phone'
    });

    $('#nav-icon3').click(function() {
        $(this).toggleClass('open');
        $('header nav').slideToggle('fast');

    });
});

function scrollFunction() {
    if (document.body.scrollTop > 65 || document.documentElement.scrollTop > 65) {
        $('header').addClass('shrink-header');
    } else {
        $('header').removeClass('shrink-header');
    }
}