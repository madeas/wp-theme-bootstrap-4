<?php
/**
 * tWPonB4 back compat functionality
 *
 * Prevents tWPonB4 from running on WordPress versions prior to 4.9,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.9.
 *
 * @package WordPress
 * @subpackage tWPonB4
 * @since tWPonB4 1.0
 */
/**
 * Prevent switching to tWPonB4 on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since tWPonB4 1.0
 */
function tWPonB4_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'tWPonB4_upgrade_notice' );
}
add_action( 'after_switch_theme', 'tWPonB4_switch_theme' );
/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * tWPonB4 on WordPress versions prior to 4.9.
 *
 * @since tWPonB4 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tWPonB4_upgrade_notice() {
	$message = sprintf( __( 'tWPonB4 requires at least WordPress version 4.9. You are running version %s. Please upgrade and try again.', 'tWPonB4' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}
/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.9.
 *
 * @since tWPonB4 1.0
 *
 * @global string $wp_version WordPress version.
 */
function twentyseventeen_customize() {
	wp_die(
		sprintf( __( 'tWPonB4 requires at least WordPress version 4.9. You are running version %s. Please upgrade and try again.', 'tWPonB4' ), $GLOBALS['wp_version'] ), '', array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twentyseventeen_customize' );
/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.9.
 *
 * @since tWPonB4 1.0
 *
 * @global string $wp_version WordPress version.
 */
function tWPonB4_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'tWPonB4 requires at least WordPress version 4.9. You are running version %s. Please upgrade and try again.', 'tWPonB4' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'tWPonB4_preview' );
