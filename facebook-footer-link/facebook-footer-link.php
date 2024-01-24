<?php
/*
Plugin Name: Facebook Footer Link 
Plugin URI: https://homeandedibles.com/taofeeq-masud-portfolio/
Description: Display Facebook Footer Link at the base of a WordPress post .
Version: 1.0
Author: Taofeeq Mas'ud
Author URI: https://homeandedibles.com/taofeeq-masud-portfolio/
Text Domain: facebook-footer-link
Domain Path: /languages
*/

// Exit if accessed directly

if (!defined('ABSPATH')){
    exit;
}


// Global Options Variable

$ffl_options = get_option('ffl_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php');

if(is_admin()){
  // Load Settings
  require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-settings.php');
}
