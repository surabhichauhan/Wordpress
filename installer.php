<?php
//***** Installer *****
global $wp_version, $wpdb;

if ( version_compare( $wp_version, '3.0', '<' ) ) {
	require_once( ABSPATH . 'wp-admin/upgrade.php' );
} else {
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
}

if( $wpdb->get_var( 'SHOW TABLES LIKE "' . SUBTABLE . '"' ) != SUBTABLE ) 
{
	$sql = 'CREATE TABLE'  .SUBTABLE. ' (
		  id int(12) NOT NULL auto_increment,
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
		  PRIMARY KEY  (id)
		);';
}
require( ABSPATH . 'wp-admin/includes/upgrade.php' );

	dbDelta( $sql );

add_option( 'resume_widget_title', 'CV Submission' );

?>