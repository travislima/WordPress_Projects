<?php
/*
Plugin Name:  Kool Form
Description:  Basic WordPress Form Plugin
Version:      0.1
Author:       travislima
Author URI:   https://travislima.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

function kool_form () {


	$content = "poo-poo";
	$content .= " is nice bra.";
	return $content;

}

add_shortcode ( 'koolform', 'kool_form' );