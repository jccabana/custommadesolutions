switcher = 
{
	themes:
	[
		{
			name: 'Magnetic',
			url: 'http://pordesign.eu',
			thumbnail: 'media/images/img-2.png'
		},
		{
			name: 'ChilliBox',
			url: 'http://pordesign.eu',
			thumbnail: 'media/images/img-2.png'
		}
	],
	sliders:
	[
		{
			name: 'Default',
			url: 'http://pordesign.eu'
		},
		{
			name: '3D',
			url: 'http://pordesign.eu'
		}
	],
	fonts:
	[
		'Allerta',
		'Allerta Stencil',
		'Arimo',
		'Arvo',
		'Bentham',
		'Cantarell',
		'Cardo',
		'Coda',
		'Cousine',
		'Covered By Your Grace',
		'Crisomo Text',
		'Cuprum',
		'Droid Sans Mono',
		'Droid Sans',
		'Droid Serif',
		'Geo',
		'IM Fell',
		'Inconsolata',
		'Jangerine',
		'Josefin Sans',
		'Josefin Slab',
		'Just Me Again Down Here',
		'Lobster',
		'Molengo',
		'Neucha',
		'Neuton',
		'Nobile',
		'OFL Sorts Mill',
		'Old Standard TT',
		'Philosopher',
		'PT Sans',
		'Puritan',
		'Raleway',
		'Reenie Beanie',
		'Tinos',
		'Unifraktur Cook',
		'Unifraktur Magunita',
		'Vollkorn',
		'Yanone Kaffeesatz'
	],
	font_pattern:
	[
		'h1',
		'h2',
		'h3',
		'h4',
		'h5',
		'h6'
	],
	color_pattern:
	{
		'background-color':
		[
			'#main-heading',
			'#nav #left-bg',
			'#nav #right-bg',
			'#nav',
			'#nav ul ul',
			'.tip:after'
		],
		'color':
		[
			'.title h2',
			'.title h3'
		]
	},
	color_pattern2:
	{
		'color':
		[
			'a',
			'a:hover',
			'a:focus',
			'h4',
			'h6',
			'.pricing .alt',
			'#main-heading #twitter_update_list li a',
			'.menu-1 li.current > a',
			'blockquote.style-1 p',
			'.services h4 a',
			'.success-stories h4 a',
			'.testimonials a',
			'#twitter_update_list a'
		],
		'background-color':
		[
			'.testimonials .read-more',
			'.button.default'
		],
		'border-color':
		[
			'.testimonials .read-more:after',
			'.frame-holder:hover img'
		],
		'border-right-color':
		[
			'.right-sidebar .menu-1 li.current > a'
		],
		'border-left-color':
		[
			'.left-sidebar .menu-1 li.current > a'
		]
	},
	psd_url: 'http://pordesign.eu',
	html_url: 'http://pordesign.eu',
	wp_url: 'http://pordesign.eu',
	purchase_url: 'http://pordesign.eu'
};

function load_script(path)
{
	$('head').append($('<script />').attr('type', 'text/javascript').attr('src', path));
}

function load_stylesheet(path)
{
	$('head').append($('<link />').attr('rel', 'stylesheet').attr('href', path).attr('type', 'text/css'));
}

function hex(x)
{
	return ("0" + parseInt(x).toString(16)).slice(-2);
}
	
function rgb2hex(rgb)
{
	rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);

	return hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

$( function()
{
	load_script('http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js');
	load_script('switcher/media/scripts/colorpicker.js');
	load_stylesheet('switcher/media/stylesheets/switcher.css');
	load_stylesheet('switcher/media/stylesheets/colorpicker.css');
	
	var $switcher = $('<div />').attr('id', 'switcher-holder').addClass('closed js').load('switcher/switcher.html #switcher-holder > *', function()
	{
		$('body').prepend($switcher);
		
		$('#switcher-holder li.toggle').click( function()
		{
			if ($('#switcher-holder').hasClass('closed'))
			{
				$('#switcher-holder').animate
				({
					'margin-top': 0
				}, 'slow', function()
				{
					$(this).removeClass('closed');
				});
				
				
				$(this).animate
				({
					'margin-top': 14,
					'margin-bottom': 0
				}, 'slow', function()
				{
					$(this).find('a').attr('title', 'Hide theme options');
				});
			} else
			{
					$('#switcher-holder').animate
				({
					'margin-top': -55
				}, 'slow', function()
				{
					$(this).addClass('closed');
				});
				
				$(this).animate
				({
					'margin-top': 55,
					'margin-bottom': -55
				}, 'slow', function()
				{
					$(this).find('a').attr('title', 'Customize theme');
				});
			}
		});
		
		$('#switcher li.psd a').attr('href', switcher.psd_url);
		$('#switcher li.html a').attr('href', switcher.html_url);
		$('#switcher li.wp a').attr('href', switcher.wp_url);
		$('#switcher a.purchase').attr('href', switcher.purchase_url);

		$.each(switcher.themes, function(i, theme)
		{
			$('#switcher li.select-theme ul.items').append($('<li />').append($('<a />').attr('href', theme.url).text(theme.name)).append($('<img />').attr('src', theme.thumbnail).attr('width', 315).attr('height', 230)));
		});
		
		$.each(switcher.sliders, function(i, slider)
		{
			$('#switcher li.change-slider ul.items').append($('<li />').append($('<a />').attr('href', slider.url).text(slider.name)));
		});

		$('#switcher li.change-font div.dropdown ul.items').css('overflow-x', 'hidden');
		
		$.each(switcher.fonts, function(i, font)
		{
			var $font = $('<li />');
			$font.append($('<a />').append($('<img />').attr('src', 'switcher/media/fonts/' + font.toLowerCase().replace(/ /g, '-') + '.png').attr('title', font).attr('alt', font.toLowerCase().replace(/ /g, '-'))));
			
			if (i == 0)
			{
				$font.addClass('selected');
			}
			
			$('#switcher li.change-font div.dropdown ul.items').append($font);
		});
		
		$('#switcher li.change-font').hover( function()
		{
			$(this).children('div.dropdown').show();
		}, function()
		{
			$(this).children('div.dropdown').hide();
		});

		$('#switcher li.change-font div.dropdown ul.items li').click( function()
		{
			$(this).parent('ul.items').children('li').removeClass('selected');
			$(this).addClass('selected');
				
			var style = '';
			var font = $(this).find('img').attr('title');
			var variants = 'regular';
				
			$('style.fonts').remove();
			$("link[href^='http://fonts.googleapis.com']").remove();
				
			if (font.toLowerCase() == 'diavlo')
			{

			} else
			{
				WebFont.load
				({
					google:
					{
						families: [ font.replace(/ /g,"+") + ':' + 'regular,bold' ]
					}
				});	
					
				$.each(switcher.font_pattern, function(index, selector)
				{
					style += selector + ' { font-family: \'' + font + '\';}';
				});

				$('<style />').attr('type', 'text/css').text(style).addClass('fonts').addClass('custom-rules').appendTo('head');
				$('#switcher li.change-font div.dropdown').hide();
			}
				
			return false;
		});

	});
	
});

$(window).load( function()
{
	$('#switcher li.change-color-1').data('color', '#000000')
	$('#switcher li.change-color-2').data('color', '#000000')

	$('#switcher li.change-color-1 div.dropdown').ColorPicker
	({
		flat: true,
		onSubmit: function(hsb, hex, rgb, el)
		{
			
		},
		onBeforeShow: function()
		{
			$(this).ColorPickerSetColor($('#switcher li.change-color-1').data('color'));
		},
		onChange: function(hsb, hex, rgb)
		{
			var style = '';
			var color = '#' + hex;

			$.each(switcher.color_pattern, function(key, elements)
			{
				$.each(elements, function(index, selector)
				{
					style += selector + ' {' + key + ':' + color + (selector == '.tip:after' ? ' !important' : '') + ';}';
				});
			});

			$('style.colors1').remove();
			$('<style />').attr('type', 'text/css').text(style).addClass('colors1').addClass('custom-rules').appendTo('head');
			$('#switcher li.change-color-1').data('color', color);
		}
	}).hover( function()
	{
		//$(this).ColorPickerShow();
	}, function()
	{
		//$(this).ColorPickerHide();
	});
	
	$('#switcher li.change-color-2 div.dropdown').ColorPicker
	({
		flat: true,
		onSubmit: function(hsb, hex, rgb, el)
		{
			
		},
		onBeforeShow: function()
		{
			$(this).ColorPickerSetColor($('#switcher li.change-color-2').data('color'));
		},
		onChange: function(hsb, hex, rgb, el)
		{
			var style = '';
			var color = '#' + hex;

			$.each(switcher.color_pattern2, function(key, elements)
			{
				$.each(elements, function(index, selector)
				{
					style += selector + ' {' + key + ':' + color + (selector == '.testimonials .read-more:after' ? ' transparent' : '') + ';}';
				});
			});

			$('style.colors2').remove();
			$('<style />').attr('type', 'text/css').text(style).addClass('colors2').addClass('custom-rules').appendTo('head');
			$('#switcher li.change-color-2').data('color', color);
		}
	}).hover( function()
	{
		//$(this).ColorPickerShow();
	}, function()
	{
		//$(this).ColorPickerHide();
	});
		
	$('div#switcher').show();
	$('#switcher-holder').removeClass('closed');
});
