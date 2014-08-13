<?php
/*
Plugin Name: Super Simple Contact Form
Plugin URI: http://shinraholdings.com/plugins/super-simple-contact-form/
Description: An absurdly simple contact form plugin. Just type [contact]. There are no options.
Version: 1.5.4
Author: bitacre
Author URI: http://shinraholdings.com
	Copyright 2013 Shinra Web Holdings (http://shinraholdings.com)
*/

// check for namespacing collision
if( !class_exists( 'superSimpleContactForm' ) ) : 
class superSimpleContactForm {
	// CONSTRUCTOR
	function __construct() {
		add_action( 'plugins_loaded', array( &$this, 'load_textdomain' ) ); // load i18n
		add_shortcode( 'contact', array( &$this, 'shortcode' ) ); // register shortcode
		if( !get_option( 'sscf-captcha-info' ) )
			add_action( 'wp_dashboard_setup', array( &$this, 'captcha_info' ) ); // setup dashboard
	}
	
	// SHORTCODE
	function shortcode() {
		
		// if form was manually submitted
		if( !array_key_exists( 'submit', $_POST ) ) 
			return $this->draw_form();
		
		elseif( empty( $_POST['sscf_from_email'] ) )
			return $this->draw_form( __( 'You forgot to include your email address!', 'super-simple-contact-form' ) );
			
		elseif( empty( $_POST['sscf_message'] ) )
			return $this->draw_form( __( 'You forgot to include a message!', 'super-simple-contact-form' ) );
		
		else return $this->send_email();
			
	}
	
	// SEND EMAIL
	function send_email() { 
			
			// get the admin account's email address
			$to_email = get_option( 'admin_email' ); 
			
			// use default if no subject given
			$subject = ( empty( $_POST['sscf_subject'] ) ? '(no subject)' : esc_attr( $_POST['sscf_subject'] ) ); 		
			
			// use default if no proper name given
			$from_name = esc_attr( $_POST['sscf_from_name'] );
			
			// use admin account's email address as sender if none given
			$from_email = esc_attr( $_POST['sscf_from_email'] );
			
			// use admin account's email address as sender if none given
			$message = esc_attr( $_POST['sscf_message'] );
			
			// build headers and send mail
			$headers = 'From: ' . $from_name . ' <' . $from_email . '>' . "\r\n";
			mail( $to_email, $subject, $message, $headers );
			
			return '<p class="sscf-report">' . __( 'Your message was sent successfully!', 'super-simple-contact-form' ) . '</p>';
	}
	
	function draw_form( $notify='' ) { 
		// translated labels
		$your_name = __( 'Your name:', 'super-simple-contact-form' );
		$your_email = __( 'Your email:', 'super-simple-contact-form' );
		$subject = __( 'Subject:', 'super-simple-contact-form' );
		$message = __( 'Message:', 'super-simple-contact-form' ); 
		
		// build return string
		return "\r\n" . 
			'<!-- Super Simple Contact Form -->
			<!-- Support URL: http://shinraholdings.com/plugins/super-simple-contact-form/ -->
			
			<style type="text/css">
				.sscf-report {}
				.sscf-forgot {
					background-color: #CD5C5C;
				}
				.sscf-notify {
					padding-bottom: 1.5em;
				}
				.sscf-notify span {
					color: #f00;
					border-bottom:1px dotted #f00;
				}
				.sscf-wrapper {
					margin: 0;
					padding: 0;
					clear: both;
				}
				.sscf-input-wrapper {}
				.sscf-input-wrapper label {
					width: 100px;
					float: left;
				}
				.sscf-input-wrapper input {
					width:280px;
				}
				.sscf-input-wrapper textarea {
					width:280px;
					height: 102px;
				}
				.sscf-submit {}
				.clear {
					height: 0;
					visibility: hidden;
					clear: both;
					display: block;
					width: auto;
				}
		</style>
			
			<div class="sscf-wrapper">
				<form action="" method="post">
				' . ( empty( $notify ) ? '' : '<div class="sscf-notify"><span>' . $notify . '</span></div>' ) . '
				<p id="sscf-your-name-wrapper" class="sscf-input-wrapper">
					<label for="sscf_from_name">' . $your_name . '</label>
					<input type="text" name="sscf_from_name" id="sscf_from_name" value="' . ( isset( $_POST['sscf_from_name'] ) ? esc_attr( $_POST['sscf_from_name'] ) : '' ) . '" />
				</p>
					
				<p id="sscf-from-email-wrapper" class="sscf-input-wrapper">
					<label for="sscf_from_email">' . $your_email . '</label>
					<input type="text" name="sscf_from_email" id="sscf_from_email" value="' . ( isset( $_POST['sscf_from_email'] ) ? esc_attr( $_POST['sscf_from_email'] ) : '' ) . '"' . ( empty( $_POST['sscf_from_email'] ) && array_key_exists( 'submit', $_POST ) ? ' class="sscf-forgot"' : '' ) . ' />
				</p>
					
				<p id="sscf-subject-wrapper" class="sscf-input-wrapper">
					<label for="sscf_subject">' . $subject . '</label>
					<input type="text" name="sscf_subject" id="sscf_subject" value="' . (isset( $_POST['sscf_subject'] ) ? esc_attr( $_POST['sscf_subject'] ) : '' ) . '" />
				</p>
					
				<p id="sscf-message-wrapper" class="sscf-input-wrapper">
					<label for="sscf_message">' . $message . '</label>
					<textarea name="sscf_message" id="sscf_message" cols="45" rows="5"' . ( empty( $_POST['sscf_message'] ) && array_key_exists( 'submit', $_POST ) ? ' class="sscf-forgot"' : '' ) . '>' . (isset( $_POST['sscf_message'] ) ? esc_attr( $_POST['sscf_message'] ) : '' ) . '</textarea>
				</p>
					
				<p id="sscf-submit-wrapper">
					<input type="submit" name="submit" id="submit" value="Send" class="sscf-submit"/>
				</p>
					
				<p class="sscf-clear"></p>
			
				</form>
			</div>
			<!-- // Super Simple Contact Form -->' . "\r\n";
	}


	// CAPTCHA INFORMATION WIDGET
	function captcha_info() {
		if( isset( $_POST['sscf-action'] ) )
			if( $_POST['sscf-action'] == 'Close Forever' ) {
				update_option( 'sscf-captcha-info', 1 );
				return;
			}
		wp_add_dashboard_widget( 'super-simple-contact-form-captcha-info', 'Super Simple Contact Form: reCAPTCHA', array( &$this, 'captcha_info_cb' ) );
	}
	
	
	// CAPTCHA CALLBACK
	function captcha_info_cb() { 

		?>
        <form action="" method="post">
        
		<p><a href="<?php echo admin_url( 'plugins.php#super-simple-contact-form' ); ?>">This plugin</a> is now available with a reCAPTCHA human verification system for just $5. This will basically eliminate any contact form spam you are getting.</p>
        
        <h3>Learn more from this plugin's <a href="http://shinraholdings.com/plugins/super-simple-contact-form/captcha/" title="Learn more about reCaptcha and this plugin" target="_blank" style="font-weight: bold; text-decoration: none;">homepage</a>.</h3>
        
         
        <p style="text-align:right;">
            <input class="primary button" type="submit" name="sscf-action" value="Close Forever"/>
        </p>
        </form>
    <?php 
	}
	
	// LOAD I18N TEXTDOMAIN
	function load_textdomain() {
		$lang_dir = trailingslashit( basename( dirname( __FILE__ ) ) ) . 'lang/';
		load_plugin_textdomain( 'super-simple-contact-form', false, $lang_dir );
	}


} // end class
endif; // end collision check

// NEW INSTANCE GET!
new superSimpleContactForm;
?>