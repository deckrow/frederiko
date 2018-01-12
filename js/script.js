(function($) {
    // header ----------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop () > 15) {
                $('.header').addClass('fixed-header');
            } else {
                $('.header').removeClass('fixed-header');
            }
        });
    });
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
        if ($(window).width() <= 992) {
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
        if ($(window).width() <= 992 && $(window).width() > 420) {
            var widthItem = $(window).width() - 50,
                totalItem = $('.review-view__item');
            totalItem.css('width', widthItem);
            $('.review-view').css('width', (totalItem.length * widthItem) + (29 * totalItem.length));
        } else if ($(window).width() <= 420) {
            var widthItemPhone = $(window).width() - 30,
                totalItemPhone = $('.review-view__item');
            totalItemPhone.css('width', widthItemPhone);
            $('.review-view').css('width', (totalItemPhone.length * widthItemPhone) + (29 * totalItemPhone.length))
        } else {
            var reviewWidth = $('.review-view__item'),
                resultReview = (reviewWidth.length * 584) - 29;
            $('.review-view').css('width', resultReview);
        }
        if ($(window).width() <= 420) {
            var textBlock = $('.hide'),
                btn       = $('.review-view__item .hide-text'),
                textHeight  = textBlock.innerHeight();
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
                $(this).next("div").css("display", 'none');
                $('.accord-header__img', $(this)).css('transform', 'rotate(0deg)');
            }else{
                $(".all-products__img .accord-content").css("display", 'none');
                $('.accord-header__img').css('transform', 'rotate(0deg)');
                $(this).next("div").css("display", 'block');
                $('.accord-header__img', $(this)).css('transform', 'rotate(45deg)');
            }
        });
    });
    // validation ------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        $('#phone-form__footer').validate({
            rules: {
                ima_kl: {
                    required: true,
                    minlength: 2
                },
                telefon_lida: {
                    required: true,
                    phoneNumber: true
                }
            },
            errorPlacement: function(error, element) {
                error.insertBefore(element);
            }

        });
        $('#phone-form__main').validate({
            rules: {
                ima_kl: {
                    required: true,
                    minlength: 2
                },
                telefon_lida: {
                    required: true,
                    phoneNumber: true
                }
            },
            errorPlacement: function(error, element) {
                error.insertBefore(element);
            }
        });
        $('#phone-form__btn').validate({
            rules: {
                ima_kl: {
                    required: true,
                    minlength: 2
                },
                telefon_lida: {
                    required: true,
                    phoneNumber: true
                }
            },
            errorPlacement: function(error, element) {
                error.insertBefore(element);
            }
        });
        jQuery.validator.addMethod("phoneNumber", function (value, element) {
            return this.optional(element) || /^[0-6,9]\d{9}$/.test(value);
        }, "Неверный формат телефона");
    });
    // click -----------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
        $('.menu').click(function () {
           $('.phone-menu').css('display', 'block');
        });
        $('.pay-more').click(function (event) {
            event.preventDefault();
            $('body').css('overflow', 'hidden');
            $('.payment-more').css({'display': 'block', 'overflow': 'auto'});
        });
        $('.home-form .btn').click(function () {
            $('.payment').css('display', 'block');
            var metr = $('.home-form .area__input .inp').val(),
                sum = 0;
            if ($('#opaque').prop("checked")) {
                sum += 2000;
            } else if ($('#transparent').prop("checked")) {
                sum = 0;
            }
            if ($('#usual').prop("checked")) {
                sum += 3800;
            } else if ($('#optiwhite').prop("checked")) {
                sum += 5800;
            }
            sum *= metr;
            sessvars.money = {price: Math.round(sum) + "руб."};
        });
        $('.close').click(function () {
            if ($(this).hasClass("pay")) {
                $('.payment').css('display', 'none');
            } else if ($(this).hasClass("phone")) {
                $('.phone-menu').css('display', 'none');
            } else if ($(this).hasClass("pop-up")) {
                $('.popup').css('display', 'none');
                $('body').css('overflow', 'auto');
            } else if ($(this).hasClass("pay-more")) {
                $('.payment-more').css('display', 'none');
                $('body').css('overflow', 'auto');
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
    // popup -----------------------------------------------------------------------------------------------------------
    $(document).ready(function () {
       $('a.pop-up').click(function (event) {
           event.preventDefault();
           $('body').css('overflow', 'hidden');
           if ($(this).hasClass("privacy-policy"))
               $('.popup.priv-pol').css({'display': 'block', 'overflow': 'auto'});
           else if ($(this).hasClass("data-processing"))
               $('.popup.data-processing').css({'display': 'block', 'overflow': 'auto'});
       });
    });
})(jQuery);

