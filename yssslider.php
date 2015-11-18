/*
  Plugin Name: YSSSlider
  Plugin URI: http://yogendra.info
  Description: A Simple Image Slider for WordPress
  Version: 1.0.0
  Author: Yogendra Singh Shekhawat
  Author URI: http://yogendra.info
  Text Domain: yss
  Domain Path: /lang
  License: GPLv2 or later
 */
 
require_once 'define.php'

function yss_main_menu_func_reg(){
  add_menu_page( 'YSS Slider', 'YSS Slider', 'manage_options', 'yss-slider', 'yss_main_menu_func' );
}
add_action( 'admin_menu', 'yss_main_menu_func_reg' );

function yss_main_menu_func(){
  ?>
  <h1>YSS Slider Admin Area</h1>
  <?php
}
