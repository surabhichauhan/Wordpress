<?php
/*
Plugin Name: just plugin
Description: plugin example
Version: 1
Author: surabhi
Author URI: https://www.youtube.com/user=bellacynosure
*/

/*****Global Variables*****/

$jp_plugin_name = 'just plugin';

$jp_options = get_option('jp_settings');

/*****includes*****/
include('includes/scripts.php');
include('includes/dataprocessing.php');
include('includes/display-functions.php');
include('includes/admin-page.php');