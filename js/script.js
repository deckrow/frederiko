(function($) {

    // input -----------------------------------------------------------------------------------------------------------
    $(".area__input").find("span").click(function () {
        var calc = $('.area__input .inp');
        var calcText = calc.val();

        if ($(this).hasClass("minus") && calcText > 1) {
            calc.val((+calcText - 0.1).toFixed(1));
        } else if ($(this).hasClass("plus") && calcText >= 1) {
            calc.val((+calcText + 0.1).toFixed(1));
        } else if ($(this).hasClass("plus") && calcText < 1) {
            calc.val(1);
        }

    });

    // slider ----------------------------------------------------------------------------------------------------------
    $('.slider').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        draggable: false
    });

    var current = 1,
        count   = $('div.slide');

    $('.current').html(current);
    $('.count').html(count.length);

    $('.slick-prev').click(function () {
        current === 1 ? current = count.length : current--;

        $('.current').html(current);
    });

    $('.slick-next').click(function () {
        current === count.length ? current = 1 : current++;

        $('.current').html(current);
    });


    // reviews ---------------------------------------------------------------------------------------------------------
    var reviewWidth = $('.review-view__item'),
        windowWidth = $(window).width(),
        resReview = (reviewWidth.length * 584) - 29;

    $('.review-view').css('width', resReview);
    if (windowWidth > 1140)
        windowWidth -= 1140;
    else
        windowWidth = 0;
    $('.cursor-width').css('left',  '20px !important');
    console.log(window.innerWidth);
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

