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


	$content = '';
	$content .= '<form method="post" action="http://plugin.local/thank-you/" />';

		$content .= '<input type="text" name="fullname" placeholder="Your Full Name" />';
		

		$content .= '<input type="text" name="email" placeholder="Your Email Address" />';
		

		$content .= '<input type="text" name="phone" placeholder="Your Phone Number" />';
		

		$content .= '<textarea name="comments" placeholder="Give us your comments" /></textarea>';
		

		$content .= '<input type="submit" name="kool_form_submit_form" Value="Submit your information">';
		

	$content .= '</form>';

	return $content;

}

add_shortcode ( 'koolform', 'kool_form' );



function kool_form_capture () {

	if(array_key_exists( 'kool_form_submit_form',$_POST ))
	{

		$to = "test@test.com";
		$subject = "Website Form Submission";
		$body = '';

		$body .= 'Name: '.$_POST['fullname'];
		$body .= 'Email: '.$_POST['email'];
		$body .= 'Phone: '.$_POST['phone'];
		$body .= 'Comments: '.$_POST['comments'];

		wp_mail($to, $subject, $body);

	}

}

add_action( 'wp_head', 'kool_form_capture' );
