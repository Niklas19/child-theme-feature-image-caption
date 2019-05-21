<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action('wp_head', 'set_caption');

function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

function set_caption() {
	if ( function_exists( 'cc_featured_image_caption' ) ) :
	 cc_featured_image_caption();
 endif;
}
};
