<?php
//***** Installer *****
global $wp_version, $wpdb;

if( $wpdb->get_var( 'SHOW TABLES LIKE "' . SUBTABLE . '"' ) != SUBTABLE ) 
{  
	$sql = 'CREATE TABLE ' . SUBTABLE . ' (
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
	dbDelta( $sql );
}	