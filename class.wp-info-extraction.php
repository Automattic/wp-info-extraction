<?php

/*
 * WordPress Information Extraction Template class
 *
 * This base class allows extraction of a set of meta information from a
 * WP post, comment, or generic piece of HTML.
 *
 * Usage:
 *   $wpie = new WP_Info_Extraction( array( 'WP_IE_Image', 'WP_IE_Link', 'WP_IE_OEmbed') )
 *   $extracted = $wpie->extract_post( $blog_id, $post_id );
 *   $extracted = $wpie->extract_comment( $blog_id, $comment_id );
 *   $extracted = $wpie->extract_html( $html );
 *
 *   $success = $wpie->store_post_meta( $blog_id, $post_id, $extracted );
 *   $success = $wpie->store_comment_meta( $blog_id, $comment_id, $extracted );
 *
 */

require_once dirname( __FILE__ ) . '/class.wp-ie-template.php';
include_once dirname( __FILE__ ) . '/class.wp-ie-image.php';

class WP_Info_Extraction {
	var $processors = array();
	var $prefix = '_wpie_'; //prefix for all meta keys

	function __construct( $processor_classes ) {
		foreach( $processor_classes as $c ) {
			if ( class_exists( $c ) )
				$this->processors[] = new $c();
		}
	}

	function set_meta_prefix( $_prefix ) {
		$this->prefix = $_prefix;
	}

	/////////////////////////////////////////
	// Extraction Methods

	public function extract_post( $blog_id, $post_id ) {

	}

	public function extract_comment( $blog_id, $comment_id ) {

	}

	public function extract_post( $html ) {

	}

	/////////////////////////////////////////
	// Storage Methods

	public function store_to_post_meta( $blog_id, $post_id, $data ) {

	}

	public function store_to_comment_meta( $blog_id, $post_id, $data ) {

	}


	/////////////////////////////////////////
	// Private Methods


}