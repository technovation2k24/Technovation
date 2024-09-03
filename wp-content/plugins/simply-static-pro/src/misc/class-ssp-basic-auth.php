<?php

namespace simply_static_pro;

use Simply_Static\Options;

/**
 * Basic Auth class
 */
class Basic_Auth {

	/**
	 * Initialize
	 */
	public function __construct() {
		// Making sure WP CLI runs fine even if Basic Auth is ON.
		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			return;
		}

		add_action( 'init', [ $this, 'auth' ] );
	}

	/**
	 * Check if Basic Auth is enabled and show form if needed.
	 *
	 * @return void
	 */
	public function auth() {
		$options = Options::instance();

		$enabled = $options->get( 'http_basic_auth_on' );

		if ( ! $enabled ) {
			return;
		}

		$auth_username = $options->get( 'http_basic_auth_username' );
		$auth_password = $options->get( 'http_basic_auth_password' );

		if ( ! $auth_username || ! $auth_password ) {
			return;
		}

		if ( ! isset( $_SERVER['PHP_AUTH_USER'] ) ) {
			$this->send_headers();
		}

		if ( ! isset( $_SERVER['PHP_AUTH_PW'] ) ) {
			$this->send_headers();
		}

		if ( $_SERVER['PHP_AUTH_USER'] !== $auth_username ) {
			$this->send_headers();
		}

		if ( $_SERVER['PHP_AUTH_PW'] !== $auth_password ) {
			$this->send_headers();
		}
	}

	/**
	 * Send Unauthorized headers.
	 *
	 * @return void
	 */
	protected function send_headers() {
		header( 'HTTP/1.1 401 Unauthorized' );
		header( 'WWW-Authenticate: Basic realm="Website"' );
		exit;
	}
}