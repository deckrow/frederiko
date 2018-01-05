(function($) {

    // input -----------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
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
    });

    // slider ----------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
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
    });

    // slider-rates ----------------------------------------------------------------------------------------------------
    $(document).ready(function () {
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
    });


    // reviews ---------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        if ($(window).width() <= 768 && $(window).width() > 320) {
            var widthItem = $(window).width() - 50,
                totalItem = $('.review-view__item');

            totalItem.css('width', widthItem);
            $('.review-view').css('width', (totalItem.length * widthItem) + (29 * totalItem.length));
        } else if ($(window).width() <= 320) {
            var widthItemPhone = $(window).width() - 30,
                totalItemPhone = $('.review-view__item');

            totalItemPhone.css('width', widthItemPhone);
            $('.review-view').css('width', (totalItemPhone.length * widthItemPhone) + (29 * totalItemPhone.length))
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




        if ($(window).width() <= 335) {
            var textBlock = $('.hide'),
                btn       = $('.review-view__item .hide-text'),
                textHeight  = textBlock.innerHeight() + 20;

            textBlock.css('height', 350 + 'px');

            $(btn).click(function () {
                if ($(this).siblings('.hide').innerHeight() === 350) {
                    $(this).siblings('.hide').animate({ height: textHeight }, 500);
                    $(this).siblings('.white-grain').css('display', 'none');
                    $(this).text('Скрыть отзыв');
                } else {
                    $(this).siblings('.hide').animate({ height: 350 }, 500);
                    $(this).siblings('.white-grain').css('display', 'block');
                    $(this).text('Развернуть отзыв');
                }
            });
        }
    });

    // product-phone ---------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        $(".all-products__img .accord-header").click(function () {
            if($(this).next("div").is(":visible")){
                $(this).next("div").slideUp("slow");
            }else{
                $(".all-products__img .accord-content").slideUp("slow");

                $(this).next("div").slideDown("slow");
            }
        });
    });


    // validation ------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        $('#phone-form__footer').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    phoneNumber: true
                }
            }
        });

        $('#phone-form__main').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    phoneNumber: true
                }
            }
        });

        jQuery.validator.addMethod("phoneNumber", function (value, element) {
            return this.optional(element) || /^\+{1}[7][0-6,9]\d{7}$/.test(value);
        }, "Неверный формат телефона");
    });

    // click -----------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        $('.menu').click(function () {
           $('.phone-menu').css('display', 'block');

        });

        $('.home-form .btn').click(function () {
            $('.payment').css('display', 'block');

        });

        $('.close').click(function () {
            if ($(this).hasClass("pay")) {
                $('.payment').css('display', 'none');
            } else if ($(this).hasClass("phone")) {
                $('.phone-menu').css('display', 'none');
            }
        });
    });

    // scroll ----------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        $("a.scroll").click(function () {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            if ($.browser.safari) {
                $('body').animate({ scrollTop: destination }, 2000);
            } else {
                $('html').animate({ scrollTop: destination }, 2000);
            }
            return false;
        });
    });

})(jQuery);

