<?php

function jp_options_page(){

    global $jp_options;


	ob_start(); ?>
	<div class="wrap">
	<h2>just plugin's option page</h2>
	<p>this is our settings page content</p>

<form method="post" action="options.php">
<?php settings_fields('jp_settings_group'); ?>
<!--
<h4><?php _e('Enable:','jp_domain'); ?></h4>
<p><input id="jp_settings[enable]" name="jp_settings['enable']" type="checkbox" value="1" <?php checked(1,$jp_options['enable']); ?> />
<label class="description"  for="jp_settings[enable]"><?php _e('display follow me link?','jp_domain'); ?> </label>
</p>
-->
<h4>good reads information </h4>
<p>
  
<input id="jp_settings[goodreads_url]" name="jp_settings[goodreads_url]" type="text" value="<?php echo $jp_options["goodreads_url"] ?>" />
<label class="description" for="jp_settings[goodreads_url]"><?php _e('enter your goodreads URL:','jp_domain'); ?></label>
</p>

<h4><?php _e('Themes:','jp_domain'); ?> </h4>
<p>
<?php $styles = array('blue','red'); ?> 
<select name="jp_settings[themes]" id="jp_settings[themes]">
<?php  foreach ($styles as $style ) { ?>
<?php if($jp_options['themes'] == $style) { $selected = 'selected="selected"'; } else { $selected = "";} ?>
<option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style ?></option>	
 <?php } ?>

</select>

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