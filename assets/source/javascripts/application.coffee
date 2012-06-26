@unfair_highlight = 
	fill_position: (position, blog_url_name, id) ->
		jQuery("#site_sitemeta_blog_highlight_" + position).val(id)
		jQuery("#highlight-position-#{position}").html(blog_url_name)
		return