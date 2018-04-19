<?php
/*
Plugin Name:  Add My Script
Description:  Basic WordPress Plugin that helps you add scripts to your header and footer
Version:      0.1
Author:       travislima
Author URI:   https://travislima.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/


/* Adding an Admin Menu */

function add_my_scripts_admin_menu() {

	add_menu_page( 'Add My Scripts Admin Menu', 'Add My Script', 'manage_options', 'add_my_scripts_menu', 'add_my_scripts_page', 'dashicons-sort', 200 );

}

add_action( 'admin_menu','add_my_scripts_admin_menu' );


function add_my_scripts_page() {
	?>

	<div class="wrap">

	<h2>Add My Scrips</h2>
	<p>A quick and easy plugin that let's you add scripts to the header and footer of your website.</p>

	<h3>Header Scripts</h3>
	<textarea >Add Header Scripts here...</textarea>

	<h3>Footer Scripts</h3>
	<textarea >Add Footer Scripts here...</textarea>


	</div>




	<?php
}

?>