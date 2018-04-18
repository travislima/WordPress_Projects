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

/* A simple start to a simple Plugin */

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




/* Adding an Admin Menu */

function motivate_me_admin_menu() {

	add_menu_page( 'Random Motivational Quote Generator', 'Motivate Me', 'manage_options', 'motivate-me-admin-menu', 'motivate_me_page', 'dashicons-smiley', 200 );

}

add_action( 'admin_menu','motivate_me_admin_menu' );

function motivate_me_page() {

	?>

	<h2>Update your motivate me page!</h2>

	<p>If you made it all the way here, well done! And, sorry! There is nothing very exciting to see here.</p>
	<h3>New WP Projects coming soon!</h3>

	<h1>Now, go. Conquer the day!</h1>

	<?php

}


