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

    $('.works .current').html(current);
    $('.works .count').html(count.length);

    $('.works .slick-prev').click(function () {
        current === 1 ? current = count.length : current--;

        $('.works .current').html(current);
    });

    $('.works .slick-next').click(function () {
        current === count.length ? current = 1 : current++;

        $('.works .current').html(current);
    });

    // slider-rates ----------------------------------------------------------------------------------------------------
    if ($(window).width() <= 768) {
        $('.rates-info').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            draggable: false
        });

        var current2 = 1,
            count2   = 2;

        $('.rates .current').html(current2);
        $('.rates .count').html(count2);

        $('.rates .slick-prev').click(function () {
            current2 === 1 ? current2 = count2 : current2--;

            $('.rates .current').html(current2);
        });

        $('.rates .slick-next').click(function () {
            current2 === count2 ? current2 = 1 : current2++;

            $('.rates .current').html(current2);
        });
    }



    // reviews ---------------------------------------------------------------------------------------------------------
    if ($(window).width() <= 768) {
        var widthItem = $(window).width() - 50,
            totalItem = $('.review-view__item');

        totalItem.css('width', widthItem);
        $('.review-view').css('width', (totalItem.length * widthItem) + (29 * totalItem.length));
    } else {
        var reviewWidth = $('.review-view__item'),
            resultReview = (reviewWidth.length * 584) - 29;

        $('.review-view').css('width', resultReview);
    }




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

