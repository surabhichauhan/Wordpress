<?php
/* Plugin Name: New Plugin
*Description: a new form plugin for user
*Version: 1
*Author: surabhi
*Author URI: https://www.youtube.com/user=bellacynosure
*/

/*****Global Variables****/


/*****includes*****/
include('includes/scripts.php');

/***Database***/

function newplugin_activate()
{
	global $wpdb;
	
	$table_name = $wpdb->prefix . "newplugin";
	
	// will return NULL if there isn't one
	if ( $wpdb->get_var('SHOW TABLES LIKE ' . $table_name) != $table_name )
	{
		$sql = 'CREATE TABLE ' . $table_name . '( 
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				user_name varchar(150) NOT NULL,
		        gender varchar(250) NOT NULL,
		        technical_stack varchar(500) NOT NULL,
		        email varchar(300) NOT NULL,
		        contact_number varchar(50) NOT NULL,
		        job_type varchar(15) NOT NULL,
		        experience varchar(50) NOT NULL,
		        current_ctc varchar(20) NOT NULL,
		        expected_ctc varchar(20) NOT NULL,
		        cover text NOT NULL,
		        resume text NOT NULL,
		        pubdate datetime NOT NULL,
		        message varchar(200),
				PRIMARY KEY  (id) )';
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		
		add_option('newplugin_database_version','1.0');
	}
}

register_activation_hook(__FILE__,'newplugin_activate');

/**include the form**/

function new_form_include()
{
	include('includes/form1.php');
}

/***shortcode***/

add_shortcode('the_form','new_form_include');


/***add menu page for admin***/

function admin_menu_page(){

	include('admin/admin.php');
}
function new_plugin_menu()
{
	add_menu_page('New Form Options ','New From ', 'manage_options', 'new-form-plugin', 'admin_menu_page');
}
add_action('admin_menu', 'new_plugin_menu');
