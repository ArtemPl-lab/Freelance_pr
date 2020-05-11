<?php
add_action('wp_enqueue_scripts', 'kardo_scripts');
	function kardo_scripts() {
		wp_enqueue_style('kardo-style', get_stylesheet_uri());
		wp_enqueue_script('kardo-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), null , true);
		wp_enqueue_script('kardo-main', get_template_directory_uri() . '/assets/js/main.min.js', array(), null , true);
	}
?>