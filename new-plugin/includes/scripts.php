<?php

/****Script Control****/

function np_load_scripts(){
	wp_enqueue_style('np-styles',plugin_dir_url(__FILE__) . 'css/style.css');
}

add_action('wp_enqueue_scripts','np_load_scripts');