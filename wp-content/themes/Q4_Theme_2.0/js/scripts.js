(function ($, root, undefined) {
	$(function () {
		'use strict';
			//Accordion Module
			$('.question').click(function(){
				$(this).toggleClass('active');
				$(this).next('.answer').toggleClass('open');
				$(this).children('.chevron-down').toggleClass('open');
			});
	    $(function () {
	    var $accordionSection = $(window.location.hash);
	    if ($accordionSection.length) {
	       $(window).scrollTop($accordionSection.offset().top);
	       $accordionSection.toggleClass('open');
				 $(this).children('.chevron-down').toggleClass('open');
	    }
		});

		//WP Backend Publish box
		$(window).scroll(function(e){
		  var el = $('#major-publishing-actions');
		  if ($(this).scrollTop() > 400 ){
		    el.addClass('sticky-time');
		  }
		  if ($(this).scrollTop() < 350 ){
		    el.removeClass('sticky-time');
		 }
		});


		// Removes empty <p></p> from wysiwyg
		$('p:empty').remove();

	});
})(jQuery, this);
