<?php
/**
 * Functionality added by the Theme Assist Plugin.
 *
 * @package Theme_Assist
 */

/**
 * Add yoast share image sizes.
 */
function ta_add_yoast_image_sizes() {
	add_image_size( 'share-facebook', 1200, 630, true );
	add_image_size( 'share-twitter', 1024, 512, true );
}
add_action( 'after_setup_theme', 'ta_add_yoast_image_sizes' );

/**
 * Sets image size for Yoast to use for Facebook shares.
 */
function ta_set_yoast_facebook_share_image_size() {
	return 'share-facebook';
}
add_filter( 'wpseo_opengraph_image_size', 'ta_set_yoast_facebook_share_image_size' );

/**
 * Sets image size for Yoast to use for Twitter shares.
 */
function ta_set_yoast_twitter_share_image_size() {
	return 'share-twitter';
}
add_filter( 'wpseo_twitter_image_size', 'ta_set_yoast_twitter_share_image_size' );