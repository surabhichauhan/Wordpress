<?php
//***** Installer *****
global $wp_version, $wpdb;

function create_db() {

	$sql = 'CREATE TABLE'  .SUBTABLE. ' (
		 
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
		 
		);';
  dbDelta( $sql );
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');


}
register_activation_hook(__FILE__,'create_db');
?>