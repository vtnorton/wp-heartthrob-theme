(function ($) {
	"use strict";

	$('.owl-showcase').owlCarousel({
		loop: true,
		nav: true,
		margin: 0,
		resonsiveClass: true,
		items: 1,
	});

	$('.owl-testimonies').owlCarousel({
		loop: true,
		nav: true,
		margin: 10,
		resonsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		},
		navText: [
			"<i class='fa fa-chevron-left'></i>",
			"<i class='fa fa-chevron-right'></i>"
		],
	});
})(jQuery);