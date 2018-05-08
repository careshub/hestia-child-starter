<?php
/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function cares_hestia_child_scripts() {
	// Include the needed js file.
	// wp_enqueue_script( 'virtue-child-arc-base-scripts', get_stylesheet_directory_uri( '/js/public.js' ), array( 'jquery' ), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'cares_hestia_child_scripts' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function cares_hestia_check_bootstrap() {
	// If bootstrap has been enqueued by the theme, and CARES Data Tools has also enqueued Bootstrap, deenqueue the Hestia version.
	if ( ( wp_script_is( 'jquery-bootstrap', 'enqueued' ) || wp_script_is( 'jquery-bootstrap', 'registered' ) ) && wp_script_is( 'bootstrap-js', 'enqueued' )  ) {
		wp_dequeue_script( 'jquery-bootstrap' );
		wp_deregister_script( 'jquery-bootstrap' );
	}

}
add_action( 'wp_footer', 'cares_hestia_check_bootstrap', 1 );
