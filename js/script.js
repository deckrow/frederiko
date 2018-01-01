(function($) {

    // slider ----------------------------------------------------------------------------------------------------------
    $('.slider').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        draggable: false
    });

    var current = 1,
        count   = document.querySelectorAll('div.slide');

    $('.current').html(current);
    $('.count').html(count.length);

    $('.slick-prev').click(() => {
        current === 1 ? current = count.length : current--;

        $('.current').html(current);
    });

    $('.slick-next').click(() => {
        current === count.length ? current = 1 : current++;

        $('.current').html(current);
    });


    // reviews ---------------------------------------------------------------------------------------------------------
    var w = $(window).width();

    //$('.reviews-slide').css('width', w);
    $('.reviews-slide').niceScroll({
        cursorcolor: "#fcc936",
        cursoropacitymin: 1,
        cursorwidth: "7px",
        cursorborderradius: 0,
        cursorfixedheight: 198,
        enablemousewheel: false,
        grabcursorenabled: true
    });

})(jQuery);

