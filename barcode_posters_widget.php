<?php
/*
Plugin Name: Barcode Posters
Plugin URI: http://www.barcodeposters.com/
Description: Puts a link to the barcode poster for your site in your sidebar
Author: Adrian Short
Version: 1.0.1
Author URI: http://adrianshort.co.uk/
*/
 
function barcodeposters_widget() {
  $rss2_url = get_bloginfo('rss2_url');
  $plugin_url = get_bloginfo('url') . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/';
  $bp_url = "http://www.barcodeposters.com/?url=" . urlencode($rss2_url) . "&print=1&show_email=1&show_rss=1&limit=10";
  $img_url = $plugin_url . "barcode_posters.png";
  
  echo "<p><a href=\"$bp_url\"><img src=\"$img_url\" width=\"16\" height=\"16\" /></a> <a href=\"$bp_url\">Print a Barcode Poster</a></p>";
}
 
function init_barcodeposters(){
    register_sidebar_widget("Barcode Posters", "barcodeposters_widget");    
}
 
add_action("plugins_loaded", "init_barcodeposters");
 
?>