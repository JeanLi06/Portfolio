// Smooth scroll
$(function () {
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({scrollTop: target.offset().top}, 1000);
                return false;
            }
        }
    });
});

// Pour chaque image dans main, on attache un attribut pour l'animation, si mobile
if ($(window).width() < 767) {
    $('main section img:odd').attr('data-aos', 'fade-right');
    $('main section img:even').attr('data-aos', 'fade-left');
}

// Init de Animate On Scroll
AOS.init();
