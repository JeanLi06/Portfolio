

// Pour chaque image dans main, on attache un attribut pour l'animation, si mobile
if ($(window).width() < 767) {
    $('main section img:odd').attr('data-aos', 'fade-right');
    $('main section img:even').attr('data-aos', 'fade-left');
    $('body').removeClass('container');
}


// Init de Animate On Scroll
AOS.init();

// Smooth scroll - Les liens du menu doivent avoir une classe "js-scrollTo"
$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
});
