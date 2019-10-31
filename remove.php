<?php
/**
 * Functionality removed by the Theme Assist Plugin.
 *
 * @package Theme_Assist
 */

/**
 * Remove emoji styles.
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Disable comment feeds.
 */
function ta_disable_comments_feed() {
	/* translators: %s: homepage url */
	wp_die( sprintf( __( 'No feed available, please visit the <a href="%s">homepage</a>!', 'marzeotti-base' ), esc_url( home_url( '/' ) ) ) ); // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
}
add_action( 'do_feed_rss2_comments', 'ta_disable_comments_feed', 1 );
add_action( 'do_feed_atom_comments', 'ta_disable_comments_feed', 1 );
add_filter( 'feed_links_show_comments_feed', '__return_false' );

/**
 * Dequeue block editor base styles.
 */
function ta_dequeue_styles() {
	wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'ta_dequeue_styles', 100 );
