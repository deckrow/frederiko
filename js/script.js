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
        current === count.length ? current = 1 : current--;

        $('.current').html(current);
    });

    $('.slick-next').click(() => {
        current === count.length ? current = 1 : current++;

        $('.current').html(current);
    });


})(jQuery);

