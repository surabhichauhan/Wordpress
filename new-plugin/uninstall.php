<?php // uninstall remove options
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit();
function np_delete_plugin()
{
	global $wpdb;

	delete_option('new-form-plugin');
//delete the table created at the time of installastion 
	$table_name = $wpdb->prefix . "newplugin"; 


}

np_delete_plugin();
?>
