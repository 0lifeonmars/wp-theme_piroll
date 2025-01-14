<?php 
function is_blog () { return ( is_search() || is_archive() || is_author() || is_category() || is_home() || is_tag()) && 'post' == get_post_type(); }
function mis_estilos() {
	wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('main');

    if (is_page_template('home-page.php')) {
        wp_register_style('slick', get_template_directory_uri() . '/assets/css/min/resources/slick.min.css');
        wp_register_style('home', get_template_directory_uri() . '/assets/css/min/pages/home.min.css');
	    wp_enqueue_style('slick');
        wp_enqueue_style('home');
    }

    if(is_page_template('about-page.php')) {
        wp_register_style('slick', get_template_directory_uri() . '/assets/css/min/resources/slick.min.css');
        wp_register_style('about-us', get_template_directory_uri() . '/assets/css/min/pages/about.min.css');
        wp_enqueue_style('slick');
        wp_enqueue_style('about-us');

    }

    if(is_page_template('contact-page.php')) { 
        wp_register_style('contact', get_template_directory_uri() . '/assets/css/min/pages/contact.min.css');
	    wp_enqueue_style('contact');
    }

    if(is_blog ()) { 
        wp_register_style('archive', get_template_directory_uri() . '/assets/css/min/pages/archive.min.css');
	    wp_enqueue_style('archive');
    }

    if(!have_posts()) { 
        wp_register_style('none', get_template_directory_uri() . '/assets/css/min/pages/none.min.css');
	    wp_enqueue_style('none');
    }

    if(is_404()) { 
        wp_register_style('error-404', get_template_directory_uri() . '/assets/css/min/pages/error404.min.css');
	    wp_enqueue_style('error-404');
    }

    if (is_single()) {
        wp_register_style('single', get_template_directory_uri() . '/assets/css/min/pages/single.min.css');
	    wp_enqueue_style('single');
    }

    if(is_page()) { 
        wp_register_style('pages', get_template_directory_uri() . '/assets/css/pages/pages.css');
	    wp_enqueue_style('pages');
    }

    
}
add_action('wp_enqueue_scripts', 'mis_estilos');
function mis_scripts() {
	if (!is_admin()) {
        wp_register_script('jquery', get_bloginfo('template_directory') .'/assets/js/min/plugins/jquery.min.js', array('jquery'), '1', true);
        wp_register_script('main', get_bloginfo('template_directory') .'/assets/js/min/main.min.js', array('jquery'), '1', true);
        wp_enqueue_script('jquery', array('jquery'), true);
		wp_enqueue_script('main', array('jquery'), true);
        if (is_page_template('home-page.php')) { // HOME PAGE
            wp_register_script('slick', get_bloginfo('template_directory') .'/assets/js/min/plugins/slick.min.js', array('jquery'), '1', true);
            wp_register_script('home', get_bloginfo('template_directory') .'/assets/js/min/pages/home.min.js', array('jquery'), '1', true);
            wp_enqueue_script('slick', array('jquery'), true);
            wp_enqueue_script('home', array('jquery'), true);
        }
        if( is_page_template('about-page.php') ) { // ABOUT PAGE
            wp_register_script('slick', get_bloginfo('template_directory') .'/assets/js/min/plugins/slick.min.js', array('jquery'), '1', true);
            wp_register_script('about-us', get_bloginfo('template_directory') .'/assets/js/min/pages/about.min.js', array('jquery'), '1', true);
            wp_enqueue_script('slick', array('jquery'), true);
            wp_enqueue_script('about-us', array('jquery'), true);
        }
        if (is_page_template('contact-page.php')) { // CONTACT PAGE
            wp_register_script('contact', get_bloginfo('template_directory') .'/assets/js/min/pages/contact.min.js', array('jquery'), '1', true);
            wp_enqueue_script('contact', array('jquery'), true);
        }
        if( is_blog () ) { // WORK PAGES
            wp_register_script('work', get_bloginfo('template_directory') .'/assets/js/min/pages/work.min.js', array('jquery'), '1', true);
            wp_enqueue_script('work', array('jquery'), true);
        }
	}	
}
add_action('wp_enqueue_scripts', 'mis_scripts', 1 );