<?php


function my_plugin_activate(){
	error_log('plugin activated');
}
register_activation_hook(__FILE__,'my_plugin_activate');