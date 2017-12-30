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
        if (current === 1)
            current = count.length;
        else
            current--;

        $('.current').html(current);
    });

    $('.slick-next').click(() => {
        if (current === count.length)
            current = 1;
        else
            current++;

        $('.current').html(current);
    });


})(jQuery);

