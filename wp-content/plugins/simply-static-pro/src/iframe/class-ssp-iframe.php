<?php

namespace simply_static_pro;

use Simply_Static\Util;

/**
 * Class to handle iframe embeds.
 */
class Iframe {
	/**
	 * Contains instance or null
	 *
	 * @var object|null
	 */
	private static $instance = null;

	/**
	 * Returns instance of Iframe.
	 *
	 * @return object
	 */
	public static function get_instance() {

		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Constructor for Iframe.
	 */
	public function __construct() {
		add_action( 'ss_dom_before_save', array( $this, 'iframe_urls' ), 10, 2 );
	}

	public function iframe_urls( $dom, $url ) {
		// Get list of URls to proxy.
		$options = get_option( 'simply-static' );

		if ( ! empty( $options['iframe_urls'] ) ) {
			$urls = array_unique( Util::string_to_array( $options['iframe_urls'] ) );

			if ( in_array( $url, $urls ) ) {
				// Replace body with iFrame.
				foreach ( $dom->find( 'body' ) as $body ) {
					$body->outertext = '<body><iframe src="' . esc_url( $url ) . '" style="width:100%;height:100%;min-height:100vh;"></iframe></body>';
				}
			}
		}

		return $dom;
	}
}
