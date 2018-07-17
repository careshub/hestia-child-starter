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

/**
 * Add the Google "noscript" tag immediately after the opening of the body element.
 *
 * @since 1.0.1
 *
 */
function cares_hestia_child_add_google_tag_manager_noscript_tag() {
	// CARES Network Sites container ID: GTM-PQGZB4S
	?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQGZB4S"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
}
// add_action( 'cares_hestia_after_body', 'cares_hestia_child_add_google_tag_manager_noscript_tag' );

/**
 * Add the Google Tag Manager script call.
 *
 * @since 1.0.1
 *
 */
function cares_hestia_child_add_google_tag_manager_script() {
	// CARES Network Sites container ID: GTM-PQGZB4S
	?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PQGZB4S');</script>
	<!-- End Google Tag Manager -->
	<?php
}
// add_action( 'wp_head', 'cares_hestia_child_add_google_tag_manager_script' );
