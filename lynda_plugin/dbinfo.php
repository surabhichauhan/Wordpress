<?php
/*
Plugin Name: lynda dashboard db widget
Description: plugin from lynda turorial
Author: Surabhi Chauhan
Author URI: https://www.youtube.com/user=bellacynosure
Version: 1
*/
function db_infodashboard_widget()
{
	global $wpdb, $current_user;
	?>

	<h2>DB Info Dashboard widget</h2>
	<p>total users:<?php echo $wpdb->query('SELECT ID FROM wp_users'); ?></p>
	<p>last post: <?php echo $wpdb->get_var('SELECT post_title FROM '. $wpdb->posts . 
		           ' WHERE post_author = '. $current_user->ID ); ?> </p>
	<p> users emails: <?php $user_emails = $wpdb->get_col('SELECT user_email FROM ' . $wpdb->users);?>
	<pre><?php echo var_dump($user_emails); ?> </pre>
	</p>
	<p>your user info:<?php $my_user_info = $wpdb->get_row('SELECT * FROM ' . $wpdb->users . ' WHERE ID = ' . $current_user->ID,ARRAY_N); ?>
	<pre> <?php echo var_dump($my_user_info); ?> </pre> </p>
	<p> All post terms: 
	<?php $all_post_terms = $wpdb->get_results('SELECT * FROM ' . $wpdb->terms); ?>
	<?php echo var_dump($all_post_terms); ?>
	</p>
	<?php
}

function databaseinfo_register_widget(){
	wp_add_dashboard_widget('database-info-dashboard-widget','Counter Dashboard Widget','db_infodashboard_widget');
}

add_action('wp_dashboard_setup','databaseinfo_register_widget');