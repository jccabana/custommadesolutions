var mainheading_flickr_template =
[
	{ width: 100, height: 75 },
	{ width: 115, height: 81 },
	{ width: 125, height: 90 },
	{ width: 145, height: 100 },
	{ width: 125, height: 90 },
	{ width: 115, height: 81 },
	{ width: 100, height: 75 }
];

function flickr_callback(data)
{
	$.each(data.items, function(i, item)
	{
		$('div.flickr-feed').each( function()
		{
			if ($(this).parents('#main-heading').length > 0)
			{
				var size = $(this).children('ul.items').children('li').length;
				
				if (size < 7)
				{
					$(this).children('ul.items').append
					(
						$('<li />').append
						(
							$('<a />').addClass('frame-holder').addClass('alignleft').attr('href', item.link).attr('rel', 'lightbox')
							.append
							(
								$('<img/>').attr('src', item.media.m).width(mainheading_flickr_template[size].width).height(mainheading_flickr_template[size].height)
							)
						)
					);
				}
			} else
			{
				$(this).children('ul.items').append
				(
					$('<li />').append
					(
						$('<a />').addClass('frame-holder').addClass('alignleft').attr('href', item.link).attr('rel', 'lightbox')
						.append
						(
							$('<img/>').attr('src', item.media.m).width(100).height(80)
						)
					)
				);
			}
		});
	});
	
	$('.main div.flickr-feed, .sidebar div.flickr-feed').slider
	({
		nav: 'ul.slider-nav',
		items: 'ul.items',
		visible: 2,
		slide: 2,
		speed: 500
	});
}
