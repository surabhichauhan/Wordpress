<?php
/*
Plugin Name: lynda dashboard widget
Description: plugin from lynda turorial
Author: Surabhi Chauhan
Author URI: https://www.youtube.com/user=bellacynosure
Version: 1
*/
function simple_dashboard_widget()
{
   ?>
   <h2> simple dashboard widget </h2>
   <h3> Im learning wordpress development </h3>
<?php

}

function sdw_register_widget(){
	wp_add_dashboard_widget('simple-dashboard-widget','simple widget','simple_dashboard_widget');
}
 add_action('wp_dashboard_setup','sdw_register_widget');