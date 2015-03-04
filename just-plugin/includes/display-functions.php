<?php

/****Display functions****/

function jp_display_content($content){

	 global $jp_options;

	if(is_single() )
	{   $extra_content = '<p class="goodreads-message ' . $jp_options['themes'] . ' ">follow me on <a href=" ' . $jp_options['goodreads_url'] . '">Good Reads</a></p>';
		$content .= $extra_content;
	}
	return $content ;
}

add_filter('the_content','jp_display_content');