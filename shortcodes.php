<?php
/**
 * @package DealCodes
 * @version 0.1
 */
/*
Plugin Name: DealCodes
Plugin URI: git@github.com:EJEHardenberg/dealcodes.git
Description: A simple test plugin to work with shortcodes
Author: Ethan J. Eldridge
Version: 0.1
Author URI: http://ejehardenberg.github.io
*/

wp_enqueue_style( 'dealcodes_css', plugin_dir_url( __FILE__ ) . 'css/dealcodes.css');

/* Simple function with no params */
function signOffText() {  
    return 'This text brought to you by the shortcode signoff';  
}  
add_shortcode('signoff', 'signOffText');  

function wrap($atts, $content = null){
	return '<div class="dc-parent">'.$content.'</div>';
}
add_shortcode('wrap', 'wrap');

function wrapclass($atts, $content = null){
	extract(shortcode_atts(array(  
		"class" => ''  
    ), $atts));  
	return "<div class=\"dc-parent $class\">".$content.'</div>';
}
add_shortcode('wrapclass','wrapclass');

function dealblock($atts, $content = null){
	extract(shortcode_atts(array(  
		"class" => 'dc-parent' , /* Default to dc-parent styles*/
		"title" => "Today's Deal!",
		"price" => "0.00", 
		"image" => plugin_dir_url(__FILE__) . 'images/default.png'
    ), $atts));  
    return  "<div class=\"$class\">" .
    		"<h3>$title</h3>".
    		"<span class=\"$class\">$price</span>".
    		"<img src=\"$image\" />".
    		"<div>$content</div>".
    		"</div>";
}
add_shortcode('dealblock','dealblock');

?>