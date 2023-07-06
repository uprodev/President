jQuery(document).ready(function($) { 

	$('img.img-svg').each(function(){
		var $img = $(this);
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		$.get(imgURL, function(data) {
			var $svg = $(data).find('svg');
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}
			$svg = $svg.removeAttr('xmlns:a');
			if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}
			$img.replaceWith($svg);
		}, 'xml');
	});

	$('#menu-responsive ul.menu li.menu-item-has-children').addClass('sub');
	$('#menu-responsive ul.menu ul.sub-menu').wrap('<div class="wrap-sub" />');

	$('.wpcf7-form-control-wrap select.with_disable option:first-child').attr('disabled',true);
});