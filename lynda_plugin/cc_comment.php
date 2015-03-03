<?php
/*
Plugin Name: cc comments
Description: plugin from lynda turorial
Author: Surabhi Chauhan
Author URI: https://www.youtube.com/user=bellacynosure
Version: 1
*/
 
 function cccomm_init()
{
	register_setting('cccomm_options','cccomm_cc_email');
}
add_action('admin_init','cccomm_init');

function cccomm_option_page()
{
	
	?>
	<div class="wrap">
	<?php screen_icon(); ?>
	<h2>CC Comments Option Page</h2>
	<p>Welcome to the CC Comments Plugin. Here you can edit the email(s) you wish to have your comments CC to.</p>
	<form action="options.php" method="post" id="cc-comments-email-options">
	<?php settings_fields('cccomm_options'); ?>
	<h3><label for="cccomm_cc_email">Email to send cc to: </label>
	<input type="text" id="cccomm_cc_email" name="cccomm_cc_email" value="<?php echo esc_attr(get_option('cccomm_cc_email')); ?>"/> </h3>
	<p><input type="submit" name="submit" value="save " /> </p>
	</form>
	</div>
	<div id="emailInfo" align="left"></div>
	<?php
}


function cccomm_plugin_menu()
{
	add_menu_page('CC Comments ','CC Comments', 'manage_options', 'cc-comments-plugin', 'cccomm_option_page');
}
add_action('admin_menu', 'cccomm_plugin_menu');



function cc_comments()
{

	global $_REQUEST;
	$to = "surabhi@codebibber.com";
	$subject = "new comment posted @ your blog" . $_REQUEST['subject'];
	$message = "Message from" . $_REQUEST['name'] . "at email" . $_REQUEST['email'].":\n" . $_REQUEST['comments'];
	wp_mail($to,$subject,$message);

}
add_action('comment_post','cc_comment');


function cccomm_email_check()
{

	$email = isset($_POST['cccomm_cc_email'])? $_POST['cccomm_cc_email'] : null;
	$msg = 'invalid';
	if($email)
	{
		if( is_email($email))
		{
			$msg = "valid";
		}
	}
	echo $msg;
	die();
}

add_action('wp_ajax_cccomm_email_check','cccomm_email_check');
add_action('admin_print_scripts','cccomm_email_check_script');

function cccomm_email_check_script()
{
	wp_enqueue_script('cc_comments',plugins_url('/lynda_plugin/cc_comment.js'));
}

function cccomm_uninstall(){
	delete_option('cccomm_cc_email');
}
register_uninstall_hook(__FILE__,'cccomm_uninstall');