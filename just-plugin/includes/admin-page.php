<?php

function jp_options_page(){

    global $jp_options;

	ob_start(); ?>
	<div class="wrap">
	<h2>just plugin's option page</h2>
	<p>this is our settings page content</p>

<form method="post" action="options.php">
<?php settings_fields('jp_settings_group'); ?>
<h4>good reads information </h4>
<p>
  <label class="description" for="jp_settings[goodreads_url]"><?php _e('enter your goodreads URL','jp_domain'); ?></label>
<input id="jp_settings[goodreads_url]" name="jp_settings[goodreads_url]" type="text" value="<?php echo $jp_options["goodreads_url"] ?>" />
</p>

<p class="submit">
<input type="submit" class="button-primary" value="<?php echo _e('save options','jp_domain'); ?>" />
</p>
</form>
	</div>
	<?php
  echo	ob_get_clean();
}

function jp_add_options_link(){
	add_options_page('Just plugin options page','just plugin','manage_options','jp_options','jp_options_page');
}
add_action('admin_menu','jp_add_options_link');

function jp_register_settings(){
	register_setting('jp_settings_group','jp_settings');
}
add_action('admin_init','jp_register_settings');