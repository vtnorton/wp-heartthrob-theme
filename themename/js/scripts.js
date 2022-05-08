(function ($) {
	"use strict";

	var loadPosts = true
	var url, pasturl
	function getNextBlogElements() {
		if (url)
			pasturl = url

		url = $('#pagination a.next').attr('href');

		const doSuccess = (content) => {
			const filteredConente = $(content).find('.posts .item')
			const nextPagination = $(content).find('#pagination').html()
			$('.posts').append(filteredConente)
			$('#pagination').html(nextPagination)
		}

		const doError = () => {
			$('.posts').unbind('scroll')
			const noItems = $('.load-more-text-no').text()
			$('.load-more-text').text(noItems)
		}

		const canILoadPosts = url && loadPosts && url !== pasturl
		if (canILoadPosts) {
			loadPosts = false

			const doComplete = () => {
				$('.load-more-text').fadeOut('fast')
				loadPosts = true
			}

			const ajaxConfig = {
				url: url,
				type: 'GET',
				cache: false,
				success: doSuccess,
				error: doError,
				complete: doComplete,
			}

			$.ajax(ajaxConfig)

		} else {
			const no_items = $('.load-more-text-no').text()
			$('.load-more-text').text(no_items)
			$('.posts').unbind('scroll')
		}
	};

	$('.posts').on('scroll', function () {
		$('.load-more-text').fadeIn('normal');
		if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
			getNextBlogElements();
		}
	});

	$.fn.isInViewport = function () {
		if (!$(this).length) return false;
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();

		var viewportTop = $(window).scrollTop();
		var viewportBottom = viewportTop + $(window).height();

		return elementBottom > viewportTop && elementTop < viewportBottom;
	};

	$(window).on('scroll', function (e) {
		$('.load-more-text').fadeIn('normal');
		if ($('.load-more-text').isInViewport() && loadPosts) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			getNextBlogElements();
		}
	});

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