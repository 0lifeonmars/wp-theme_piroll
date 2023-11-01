<?php
/* css */
function mis_estilos() {
	wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'mis_estilos');
	
/*scripts*/
function mis_scripts() {
	if (!is_admin()) {
        wp_register_script('jquery', get_bloginfo('template_directory') .'/assets/js/min/jquery.min.js', array('jquery'), '1', true);
		wp_register_script('social', get_bloginfo('template_directory') .'/assets/js/min/social.min.js', array('jquery'), '1', true);
        wp_register_script('slick', get_bloginfo('template_directory') .'/assets/js/min/slick.min.js', array('jquery'), '1', true);
        wp_register_script('api', get_bloginfo('template_directory') .'/assets/js/min/api.min.js', array('jquery'), '1', true);
        wp_register_script('main', get_bloginfo('template_directory') .'/assets/js/min/main.min.js', array('jquery'), '1', true);

        wp_enqueue_script('jquery', array('jquery'), true);
        wp_enqueue_script('social', array('jquery'), true);
        wp_enqueue_script('slick', array('jquery'), true);
        wp_enqueue_script('api', array('jquery'), true);
		wp_enqueue_script('main', array('jquery'), true);
	}	
}
add_action("wp_enqueue_scripts", "mis_scripts", 1 );