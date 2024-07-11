(function($) { 'use strict';
	// Calculate clients viewport
	const w = window,
	d = document,
	e = d.documentElement,
	g = d.getElementsByTagName('body')[0];

	let x = w.innerWidth || e.clientWidth || g.clientWidth, // Viewport Width
	y = w.innerHeight || e.clientHeight || g.clientHeight; // Viewport Height

	// Global vars
	const htmlEl = document.documentElement;
	const body = document.body;

	$(function(){

		// On scroll
		const fnOnScroll = function(){
			const animateBlock = $('.image-animation-from-bottom, .image-animation-from-top, .image-animation-from-left, .image-animation-from-right, .animate-from-top, .animate-from-bottom, .animate-from-left, .animate-from-right');

			animateBlock.removeClass('is-loading');

			animateBlock.each(function(){
				const $this = $(this);
				const animateBlockOffsetTop = $this.offset().top;
				let activationOffset;

				// Determinate distance to initiate animation relative to viewport height
				if($this.data('offset'))
					activationOffset = $this.data('offset');
				else if($this.hasClass('image-animation-from-bottom'))
					activationOffset = 1.2;
				else
					activationOffset = 1.1;

				if((window.pageYOffset > animateBlockOffsetTop - y / activationOffset)){
					$this.addClass('scrolled-to');
				}
			});
		};

		fnOnScroll();

		window.onscroll = function() {
			setTimeout(function(){
				fnOnScroll();
			},300);
		};

	}); // End Document Ready
})(jQuery);