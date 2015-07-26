<?php
/**
 * Plugin Name: Custom Functions
 * Plugin URI: http://yoursite.com
 * Description: This is an awesome custom plugin with functionality that I'd like to keep when switching things.
 * Author: Your Name
 * Author URI: http://yoursite.com
 * Version: 0.1.0
 */

function getFrontPageImages_function() {
    global $wpdb;
    $images = $wpdb->get_row("SELECT * FROM images, ARRAY_N");
    $str = $images[0]->title;
    return $str;

}
function register_shortcodes(){
   add_shortcode('frontpage_images', 'getFrontPageImages_function');
}

add_action( 'init', 'register_shortcodes');
 ?>
