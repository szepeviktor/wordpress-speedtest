<?php 

/*
Plugin Name: WP Mail From II
Version: 1.0.2
Plugin URI: http://wordpress.org/extend/plugins/wp-mailfrom-ii/
Description: Allows you to configure the default email address and name used for emails sent by WordPress.
Author: Ben Huson

An updated and fully re-worked version of the WP Mail From plugin by Tristan Aston.
http://wordpress.org/extend/plugins/wp-mailfrom/

Copyright (c) 2012, 
Released under the GPL license
http://www.gnu.org/licenses/gpl.txt
*/

class WP_MailFrom_II {

	/**
	 * Constructor
	 */
	function WP_MailFrom_II() {
		add_action( 'admin_init', array( $this, 'settings' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
		
		// Name and email filter
		add_filter( 'wp_mail_from_name', array( $this, 'wp_mail_from_name' ), 100 );
		add_filter( 'wp_mail_from', array( $this, 'wp_mail_from' ), 100 );
		
		// Legacy support for old options - just in case someone used this directly!
		// (not really needed unless we can takeover the old plugin)
		//add_filter( 'pre_option_site_mail_from_name', 'get_option_site_mail_from_name', 1 );
		//add_filter( 'pre_option_site_mail_from_email', 'get_option_site_mail_from_email', 1 );
	}
	
	/**
	 * Load Text Domain Language Support
	 */
	function load_textdomain() {
		load_plugin_textdomain( 'wp-mailfrom-ii', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}
	
	/**
	 * Filter: wp_mail_from_name
	 *
	 * @param string $name Default name.
	 * @return string $name WP Mail From name.
	 */
	function wp_mail_from_name( $name ) {
		$wp_mailfrom_ii_name = get_option( 'wp_mailfrom_ii_name', '' );
		if ( ! empty( $wp_mailfrom_ii_name ) && ! $this->is_default_from_name( $wp_mailfrom_ii_name ) ) {
			return $wp_mailfrom_ii_name;
		}
		return $name;
	}
	
	/**
	 * Filter: wp_mail_from
	 *
	 * @param string $name Default email.
	 * @return string $name WP Mail From email.
	 */
	function wp_mail_from( $email ) {
		$wp_mailfrom_ii_email = get_option( 'wp_mailfrom_ii_email', '' );
		if ( ! empty( $wp_mailfrom_ii_email ) && ! $this->is_default_from( $wp_mailfrom_ii_email ) ) {
			return $wp_mailfrom_ii_email;
		}
		return $email;
	}

	/**
	 * Is Default From Name
	 *
	 * Checks to see if the name is the default name assigned by WordPress.
	 * This is defined in wp_mail() in wp-includes/pluggable.php
	 *
	 * @param   string   $name  Name to check.
	 * @return  boolean
	 */
	function is_default_from_name( $name ) {
		if ( $name == 'WordPress' )
			return true;
		return false;
	}

	/**
	 * Is Default From Email
	 *
	 * Checks to see if the email is the default address assigned by WordPress.
	 * This is defined in wp_mail() in wp-includes/pluggable.php
	 *
	 * Also note, some hosts may refuse to relay mail from an unknown domain. See
	 * http://trac.wordpress.org/ticket/5007
	 *
	 * @param   string   $email  Email to check.
	 * @return  boolean
	 */
	function is_default_from( $email ) {

		// Get the default from email address
		$sitename = strtolower( $_SERVER['SERVER_NAME'] );
		if ( substr( $sitename, 0, 4 ) == 'www.' ) {
			$sitename = substr( $sitename, 4 );
		}
		$default_email = 'wordpress@' . $sitename;

		if ( $email == $default_email )
			return true;
		return false;
	}

	/**
	 * Admin Menu
	 */
	function admin_menu() {
		add_options_page( __( 'WP Mail From Plugin', 'wp-mailfrom-ii' ), __( 'Mail From', 'wp-mailfrom-ii' ), 'manage_options', 'wp_mailfrom', array( $this, 'settings_page' ) );
	}
	
	/**
	 * Settings Page
	 */
	function settings_page() {
		?>
		<div class="wrap">
			<div id="icon-options-general" class="icon32"><br></div>
			<h2><?php _e( 'Mail From Settings', 'wp-mailfrom-ii' ); ?></h2>
			<form action="options.php" method="post">
				<?php
				settings_fields( 'wp_mailfrom_ii' );
				do_settings_sections( 'wp_mailfrom_ii' );
				?>
				<p class="submit"><input name="submit" type="submit" class="button button-primary" value="<?php esc_attr_e( 'Save Changes', 'wp-mailfrom-ii' ); ?>" /></p>
			</form>
		</div>
		<?php
	}
	
	/**
	 * Settings API
	 */
	function settings() {
		add_settings_section(
			'wp_mailfrom_ii',
			'',
			array( $this, 'settings_section' ),
			'wp_mailfrom_ii'
		);
		add_settings_field(
			'wp_mailfrom_ii_name',
			__( 'From Name', 'wp-mailfrom-ii' ),
			array( $this, 'wp_mailfrom_ii_name_field' ),
			'wp_mailfrom_ii',
			'wp_mailfrom_ii'
		);
		add_settings_field(
			'wp_mailfrom_ii_email',
			__( 'From Email Address', 'wp-mailfrom-ii' ),
			array( $this, 'wp_mailfrom_ii_email_field' ),
			'wp_mailfrom_ii',
			'wp_mailfrom_ii'
		);
 		register_setting( 'wp_mailfrom_ii', 'wp_mailfrom_ii_name', array( $this, 'sanitize_wp_mailfrom_ii_name' ) );
 		register_setting( 'wp_mailfrom_ii', 'wp_mailfrom_ii_email', 'is_email' );
	}

	/**
	 * Sanitize Mail From Name
	 * Strips out all HTML, scripts...
	 *
	 * @param string $val Name.
	 * @return string Sanitized name.
	 */
	function sanitize_wp_mailfrom_ii_name( $val ) {
		return wp_kses( $val, array() );
	}

	/**
	 * Mail From Settings Section
	 */
	function settings_section() {
		echo '<p>' . __( 'If set, these 2 options will override the name and email address in the <strong>From:</strong> header on all sent emails.', 'wp-mailfrom-ii' ) . '</p>';
	}

	/**
	 * Mail From Name Field
	 */
	function wp_mailfrom_ii_name_field() {
		echo '<input name="wp_mailfrom_ii_name" type="text" id="wp_mailfrom_ii_name" value="' . get_option( 'wp_mailfrom_ii_name', '' ) . '" class="regular-text" />';
	}

	/**
	 * Mail From Email Field
	 */
	function wp_mailfrom_ii_email_field() {
		echo '<input name="wp_mailfrom_ii_email" type="text" id="wp_mailfrom_ii_email" value="' . get_option( 'wp_mailfrom_ii_email', '' ) . '" class="regular-text" />';
	}
	
	/**
	 * Legacy support for get_option( 'site_mail_from_name' )
	 */
	function get_option_site_mail_from_name( $option, $default = false ) {
		return get_option( 'wp_mailfrom_ii_name', $default );
	}
	
	/**
	 * Legacy support for get_option( 'site_mail_from_email' )
	 */
	function get_option_site_mail_from_email( $option, $default = false ) {
		return get_option( 'wp_mailfrom_ii_email', $default );
	}
	
	/**
	 * Register Activation
	 * Perform upgrades etc.
	 */
	function register_activation() {
		
		// Temporarily remove our filter which provide support for legacy options
		// (is only really needed if we can takeover the old plugin, but leave in for now)
		remove_filter( 'pre_option_site_mail_from_name', 'get_option_site_mail_from_name', 1 );
		remove_filter( 'pre_option_site_mail_from_email', 'get_option_site_mail_from_email', 1 );
		
		// Get old option value and try to assign them to new options
		$name = get_option( 'site_mail_from_name', '' );
		$email = get_option( 'site_mail_from_email', '' );
		$new_name = get_option( 'wp_mailfrom_ii_name', '' );
		$new_email = get_option( 'wp_mailfrom_ii_email', '' );
		if ( ! empty( $name ) && empty( $new_name ) )
			$name_updated = add_option( 'wp_mailfrom_ii_name', $name );
		if ( ! empty( $email ) && empty( $new_email ) )
			$email_updated = add_option( 'wp_mailfrom_ii_email', $email );
		
		// If new options created delete old options
		// (don't do this at the moment, only if we can takeover the old plugin)
		/*
		if ( $name_updated )
			delete_option( 'site_mail_from_name' );
		if ( $email_updated )
			delete_option( 'site_mail_from_email' );
		*/
	}
	
}

global $WP_MailFrom_II;
$WP_MailFrom_II = new WP_MailFrom_II();
register_activation_hook( __FILE__, array( $WP_MailFrom_II, 'register_activation' ) );
