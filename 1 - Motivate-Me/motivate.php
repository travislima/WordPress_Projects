<?php
/*
Plugin Name:  Motivation Quote
Description:  Basic WordPress Plugin that generates a quote.
Version:      0.1
Author:       travislima
Author URI:   https://travislima.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

function motivation_quote_gen() {
	$quote = array( 

		"Just do it.", 
		"Either you run the day or the day runs you.", 
		"If you are stuck on a problem. Don't just sit there thinking about it. Start working. A solution will follow."
		 );

	$rand_quote = array_rand($quote, 1);
	return $quote[$rand_quote] ;
    
}

add_shortcode( 'motivate-me', 'motivation_quote_gen' );