<?php
/*
Plugin Name: Codeb Form
Description: Form plugin for codebibber website
Aurthor: Surabhi Chauhan
Author URI: https://www.youtube.com/user=bellacynosure
Version: 1
*/

global $wpdb;

function CodebFormInclude(){
	include( 'includes/form.php' );
}

// Register a new shortcode: 
add_shortcode('custom_form', 'custom_form_shortcode');

// The callback function that will replace [book]
function custom_form_shortcode() {
    ob_start();
    CodebFormInclude();
    return ob_get_clean();
}
?>
