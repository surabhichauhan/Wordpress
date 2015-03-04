<?php

/****Script Control****/

function np_load_scripts(){
	wp_enqueue_style('jp-styles',plugin_dir_url(__FILE__) . 'css/style.css');
}

add_action('wp_enqueue_scripts','jp_load_scripts');