$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        nav: true,
        dots: false,
        navText: ['<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>']
    });

    // $('.owl-carousel').lightGallery({
    //     selector: '.item'
    // });

    window.onscroll = function() { scrollFunction() };
    scrollFunction();

    AOS.init({
        disable: 'phone'
    });

    $('#nav-icon3').click(function() {
        $(this).toggleClass('open');
        $('header nav').slideToggle('fast');

    });

    function scrollToAnchor(hash) {
        var target = $(hash),
            headerHeight = $("header").height(); // Get fixed header height

        target = target.length ? target : $('[name=' + hash.slice(1) +']');
        console.log(target)

        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - headerHeight
            }, 400);
            return false;
        }
    }

    $(window).scroll(function () {
        console.log(location.hash)
    });

    if(window.location.hash) {
        scrollToAnchor(window.location.hash);
    }

    $("a[href*=\\#]:not([href=\\#])").click(function(event) {
        event.preventDefault();
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            || location.hostname == this.hostname) {
            $('header nav').find('li').removeClass('active');
            $(this).parents('li').addClass('active');
            scrollToAnchor(this.hash);
        }
    });
});

function scrollFunction() {
    if (document.body.scrollTop > 65 || document.documentElement.scrollTop > 65) {
        $('header').addClass('shrink-header');
    } else {
        $('header').removeClass('shrink-header');
    }
}
