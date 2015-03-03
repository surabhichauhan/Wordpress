<?php
/*
Plugin Name: map plugin using shortcodes
Description: plugin from lynda turorial
Author: Surabhi Chauhan
Author URI: https://www.youtube.com/user=bellacynosure
Version: 1
*/

function lynda_map($atts,$content=null)
{  
	shortcode_atts( array( 'title' => 'Your Map:', 'address' => ''), $atts);
	$base_map_url = 'http://maps.google.com/maps/api/staticmap?sensor=false&size=300x256&zoom=16&format=png&marker=color:red&center=';
	return '
	<h2>' . $atts['title'] . '</h2>
	<img width="300" height="256"
		src="' . $base_map_url . urlencode($atts['address']) . '" />';
}
add_shortcode('map-it','lynda_map');