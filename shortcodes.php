<?php
/**
 * @package DealCodes
 * @version 0.1
 */
/*
Plugin Name: DealCodes
Plugin URI: git@git.bear-code.com:localvore
Description: A simple test plugin to work with shortcodes
Author: Ethan J. Eldridge
Version: 0.1
Author URI: http://ejehardenberg.github.io
*/


function signOffText() {  
    return 'Thank you so much for reading! And remember to subscribe to our RSS feed. ';  
}  
add_shortcode('signoff', 'signOffText');  

?>