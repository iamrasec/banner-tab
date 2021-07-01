<?php
/*
Plugin Name: Banner Tab
Plugin URI: https://github.com/iamrasec/banner-tab
Description: Custom switchable banner.
Version: 1.0
Author: Cesar A. Yamuta Jr.
Author URI: https://github.com/iamrasec
*/

add_action('admin_menu', 'banner_tab_setup');
function banner_tab_setup(){
    add_menu_page( 'Banner Tab Admin Page', 'Banner Tab', 'manage_options', 'banner-tab', 'banner_tab_init' );
}
 
function banner_tab_init(){
    $output = "<h1>Banner Tab Admin Page</h1>";

    $output .= "";

    echo $output;
}

add_action( 'init', 'banner_tab_scripts');
function banner_tab_scripts() {
  wp_register_style('slickcss', plugins_url('lib/slick/slick.css',__FILE__ ));
  wp_register_style('slicktheme', plugins_url('lib/slick/slick-theme.css',__FILE__ ));
  wp_register_style('banner_tab_scripts', plugins_url('banner-tab.css',__FILE__ ));

  wp_enqueue_style('slickcss');
  wp_enqueue_style('slicktheme');
  wp_enqueue_style('banner_tab_scripts');

  wp_register_script( 'slickjs', plugins_url('lib/slick/slick.js',__FILE__ ), array(), false, true);
  wp_register_script( 'banner_tab_scripts', plugins_url('banner-tab.js',__FILE__ ), array(), false, true);

  wp_enqueue_script('slickjs');
  wp_enqueue_script('banner_tab_scripts');
}

add_shortcode('show-banner-tab', 'banner_tab_shortcode');
function banner_tab_shortcode($atts) {

  require_once('bt-template.php');

}