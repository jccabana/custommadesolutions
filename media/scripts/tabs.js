/**
 * Por Design Tabs
 *
 * Copyright (c) 2010 Por Design (pordesign.eu)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

(function($)
{
	$.fn.tabs = function()
	{
		$(this).each( function()
		{
			var $nav = $(this).children('ul.nav').children('li');
			var $content = $(this).children('ul.content ').children('li');
			var index = 0;
			
			if ($nav.filter('.current').length > 0)
			{
				index = $nav.index($nav.filter('.current'));
			}
			
			$nav.removeClass('current').eq(index).addClass('current');
			$content.hide().eq(index).show();
			
			$nav.click( function()
			{
				$nav = $(this).parent('ul.nav').children('li');
				$content = $(this).parents('.tabs').children('ul.content').children('li');
				
				index = $nav.index(this);

				$nav.removeClass('current').eq(index).addClass('current');
				$content.hide().eq(index).show();
				
				return false;
			});
		});

		return this;
	}
})(jQuery);
