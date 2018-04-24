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

    if ( isset( $_POST['submit_scripts_update'] ) ) {

    if( isset( $_POST['header_scripts'] ) ) {
        update_option( 'add_my_scripts_header_scripts', $_POST['header_scripts']);
    }
        
    if( isset( $_POST['footer_scripts'] ) ) {
        update_option( 'add_my_scripts_footer_scripts', $_POST['footer_scripts']);
    }       
    
        ?>

        <div id="setting-error-settings-updated" class="updated settings-error notice is-dismissible"><strong></strong>Settings have been saved.</div>
        <?php 

    }

    $header_scripts = get_option( 'add_my_scripts_header_scripts', 'None' );
    $footer_scripts = get_option( 'add_my_scripts_footer_scripts', 'None' );


    ?>

    <div class="wrap">

        <h2>Add My Scrips</h2>
        <p>A quick and easy plugin that let's you add scripts to the header and footer of your website.</p>

        <form method="post" action="">

        <label for="header_scripts">Header Scripts</label>
        <textarea class="large-text"><?php print $header_scripts; ?></textarea>

        <label for="footer_scripts">Footer Scripts</label>
        <textarea class="large-text"><?php print $footer_scripts; ?></textarea>

        <input type="submit" name="submit_scripts_update" class="button button-primary" value="UPDATE MY SCRIPTS">

        </form>

    </div>

<?php
} //close function
