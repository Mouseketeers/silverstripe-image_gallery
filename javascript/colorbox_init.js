;(function($) {
	$(document).ready(function() {
		$('.colorbox').colorbox({
				current: "Image {current} of {total}",
				next: "Next",
				previous: "Previous",
				maxWidth:"100%",
				maxHeight:"100%",
				scrolling:false,
				opacity:0.7
			});
		});
})(jQuery);